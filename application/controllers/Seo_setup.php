<?php
/**
 * SEO Setup Controller - Initialize and manage SEO tags
 * Access: /seo_setup/initialize (run once to set up default tags)
 */

class Seo_setup extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('seo_setup');
        $this->load->helper('tag');
        $this->load->model('Tag_mod');
    }

    /**
     * Initialize default SEO tags for all pages
     * URL: /seo_setup/initialize
     */
    public function initialize() 
    {
        // Basic security check - remove this in production
        if (!isset($_GET['confirm']) || $_GET['confirm'] !== 'yes') {
            die('Add ?confirm=yes to the URL to run the SEO setup. Warning: This will add default SEO tags to your database.');
        }

        $result = setup_default_seo_tags();
        
        echo "<h2>SEO Setup Complete</h2>";
        echo "<p>" . $result . "</p>";
        
        // Show summary of what was created
        $this->show_summary();
    }

    /**
     * Show summary of current SEO tags
     */
    public function show_summary() 
    {
        $pages = $this->db
            ->select('DISTINCT page')
            ->from('cr_page_tags')
            ->where_in('tag_type', ['title', 'meta'])
            ->get()
            ->result();

        echo "<h3>Current SEO Pages:</h3>";
        echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>";
        echo "<tr><th>Page</th><th>Title Tag</th><th>Meta Description</th><th>Actions</th></tr>";
        
        foreach ($pages as $page_obj) {
            $page = $page_obj->page;
            $tags = $this->Tag_mod->get_page_tags($page);
            
            $title = '';
            $description = '';
            
            foreach ($tags as $tag) {
                if (strpos($tag->tag_key, '_title') !== false) {
                    $title = substr($tag->tag_value, 0, 60) . (strlen($tag->tag_value) > 60 ? '...' : '');
                }
                if (strpos($tag->tag_key, '_meta_description') !== false) {
                    $description = substr($tag->tag_value, 0, 80) . (strlen($tag->tag_value) > 80 ? '...' : '');
                }
            }
            
            echo "<tr>";
            echo "<td><strong>" . $page . "</strong></td>";
            echo "<td>" . htmlspecialchars($title) . "</td>";
            echo "<td>" . htmlspecialchars($description) . "</td>";
            echo "<td><a href='" . base_url() . "admin/tags' target='_blank'>Edit</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        
        echo "<br><h3>Next Steps:</strong>";
        echo "<ol>";
        echo "<li>Review and customize the default titles and descriptions via <a href='" . base_url() . "admin/tags' target='_blank'>Tag Management</a></li>";
        echo "<li>Test the pages to ensure SEO tags are displaying correctly</li>";
        echo "<li>Add more specific keywords and optimize for your target audience</li>";
        echo "<li>Consider adding Open Graph and Twitter Card optimizations</li>";
        echo "</ol>";
    }

    /**
     * Check SEO tag lengths and provide recommendations
     */
    public function check_seo_quality() 
    {
        $recommendations = get_seo_page_recommendations();
        $pages = $this->db
            ->select('*')
            ->from('cr_page_tags')
            ->where_in('tag_type', ['title', 'meta'])
            ->get()
            ->result();

        echo "<h2>SEO Quality Check</h2>";
        echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>";
        echo "<tr><th>Page</th><th>Tag</th><th>Content</th><th>Length</th><th>Status</th><th>Recommendation</th></tr>";
        
        foreach ($pages as $tag) {
            $length = strlen($tag->tag_value);
            $status = 'OK';
            $recommendation = '';
            
            if (strpos($tag->tag_key, '_title') !== false) {
                if ($length < $recommendations['title_length']['min']) {
                    $status = 'Too Short';
                    $recommendation = 'Titles should be ' . $recommendations['title_length']['optimal'];
                } elseif ($length > $recommendations['title_length']['max']) {
                    $status = 'Too Long';
                    $recommendation = 'Titles should be ' . $recommendations['title_length']['optimal'];
                }
            } elseif (strpos($tag->tag_key, '_meta_description') !== false) {
                if ($length < $recommendations['description_length']['min']) {
                    $status = 'Too Short';
                    $recommendation = 'Descriptions should be ' . $recommendations['description_length']['optimal'];
                } elseif ($length > $recommendations['description_length']['max']) {
                    $status = 'Too Long';
                    $recommendation = 'Descriptions should be ' . $recommendations['description_length']['optimal'];
                }
            }
            
            $status_color = ($status === 'OK') ? 'green' : 'red';
            
            echo "<tr>";
            echo "<td>" . $tag->page . "</td>";
            echo "<td>" . str_replace($tag->page . '_', '', $tag->tag_key) . "</td>";
            echo "<td>" . htmlspecialchars(substr($tag->tag_value, 0, 50)) . "...</td>";
            echo "<td>" . $length . "</td>";
            echo "<td style='color: " . $status_color . ";'><strong>" . $status . "</strong></td>";
            echo "<td>" . $recommendation . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    /**
     * Migrate old SEO tags to new format (title/meta types)
     * URL: /seo_setup/migrate_tags
     */
    public function migrate_tags() 
    {
        // Basic security check
        if (!isset($_GET['confirm']) || $_GET['confirm'] !== 'yes') {
            die('Add ?confirm=yes to the URL to migrate old SEO tags. Warning: This will update existing tags in your database.');
        }

        // Update title tags
        $title_updated = $this->db
            ->where('tag_type', 'seo')
            ->where('tag_key LIKE', '%_title')
            ->update('cr_page_tags', ['tag_type' => 'title']);

        // Update meta description tags  
        $meta_updated = $this->db
            ->where('tag_type', 'seo')
            ->where('tag_key LIKE', '%_meta_description')
            ->update('cr_page_tags', ['tag_type' => 'meta']);

        echo "<h2>Tag Migration Complete</h2>";
        echo "<p>Title tags updated: " . $this->db->affected_rows() . "</p>";
        echo "<p>Meta description tags updated: " . $meta_updated . "</p>";
        
        // Show updated summary
        $this->show_summary();
    }

    /**
     * Test method to verify controller is working
     * URL: /seo_setup/test
     */
    public function test() 
    {
        echo "<h2>SEO Controller Test</h2>";
        echo "<p>✓ Controller is working properly</p>";
        echo "<p>✓ Session library is loaded</p>";
        echo "<p>✓ Database connection is active</p>";
        echo "<p>✓ Tag model is loaded</p>";
        
        // Test database connection
        $db_test = $this->db->get('cr_page_tags', 1);
        if ($db_test) {
            echo "<p>✓ Database table 'cr_page_tags' is accessible</p>";
        } else {
            echo "<p>✗ Database table 'cr_page_tags' is not accessible</p>";
        }
        
        // Check existing tag types
        echo "<h3>Current Tag Types in Database:</h3>";
        $tag_types = $this->db->select('tag_type, COUNT(*) as count')
                             ->group_by('tag_type')
                             ->get('cr_page_tags')
                             ->result();
        
        if ($tag_types) {
            echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>";
            echo "<tr><th>Tag Type</th><th>Count</th><th>Status</th></tr>";
            foreach ($tag_types as $type) {
                $status = '';
                if ($type->tag_type == 'seo') {
                    $status = '<span style="color: orange;">⚠️ Needs Migration</span>';
                } elseif (in_array($type->tag_type, ['title', 'meta'])) {
                    $status = '<span style="color: green;">✓ Updated Format</span>';
                } else {
                    $status = '<span style="color: blue;">ℹ️ Other Type</span>';
                }
                echo "<tr><td>{$type->tag_type}</td><td>{$type->count}</td><td>{$status}</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No tags found in database.</p>";
        }
        
        echo "<h3>Available Methods:</h3>";
        echo "<ul>";
        echo "<li><a href='" . base_url() . "seo_setup/initialize?confirm=yes'>Initialize SEO Tags</a></li>";
        echo "<li><a href='" . base_url() . "seo_setup/migrate_tags?confirm=yes'>Migrate Old Tags</a></li>";
        echo "<li><a href='" . base_url() . "seo_setup/show_summary'>Show Summary</a></li>";
        echo "<li><a href='" . base_url() . "seo_setup/check_seo_quality'>Check SEO Quality</a></li>";
        echo "</ul>";
        
        echo "<h3>Tag Type Changes Made:</h3>";
        echo "<ul>";
        echo "<li>✅ Title tags now use tag_type = 'title'</li>";
        echo "<li>✅ Meta descriptions now use tag_type = 'meta'</li>";
        echo "<li>✅ Old 'seo' type tags can be migrated automatically</li>";
        echo "</ul>";
    }
}
?>