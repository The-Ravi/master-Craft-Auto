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
            ->where('tag_type', 'seo')
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
            ->where('tag_type', 'seo')
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
}
?>