<?php
/**
 * Debug script to check disclaimer on gallery page
 */

// Include CodeIgniter framework
define('BASEPATH', TRUE);
require_once 'index.php';

// Get CodeIgniter instance
$CI =& get_instance();
$CI->load->database();
$CI->load->model('Tag_mod');
$CI->load->helper('tag');

echo "<h2>🔍 Gallery Page Disclaimer Debug</h2>\n";

// 1. Check gallery tags
echo "<h3>1. Gallery Page Tags</h3>\n";
$gallery_tags = $CI->Tag_mod->get_page_tags('home_gallery');
echo "Found " . count($gallery_tags) . " tags for home_gallery:<br>\n";
foreach ($gallery_tags as $tag) {
    echo "- " . $tag->tag_key . " = " . $tag->tag_value . "<br>\n";
}
echo "<br>\n";

// 2. Test disclaimer logic
echo "<h3>2. Disclaimer Logic Test</h3>\n";
$disclaimer = 'Results may vary based on car condition, age and usage. Contact us for a personalized assessment.';

if (function_exists('get_tag') && !empty($gallery_tags)) {
    $tag_disclaimer = get_tag($gallery_tags, 'footer_disclaimer', '');
    if (empty($tag_disclaimer)) {
        $tag_disclaimer = get_tag($gallery_tags, 'home_section7_footer_disclaimer_h3', '');
    }
    if (!empty($tag_disclaimer)) {
        $disclaimer = $tag_disclaimer;
    }
}

echo "Final disclaimer text: <strong>" . $disclaimer . "</strong><br><br>\n";

// 3. Test the exact footer code
echo "<h3>3. Footer HTML Test</h3>\n";
echo '<div class="disclaimer-section text-center py-3 mb-4" style="background: red; border: 2px solid yellow;">';
echo '<div class="disclaimer-content">';
echo '<i class="fa fa-info-circle" style="color: #ffd700; margin-right: 8px; font-size: 1.1rem;"></i>';
echo '<span class="disclaimer-text" style="color: #ffffff; font-size: 0.9rem; line-height: 1.5; font-weight: 400; text-shadow: 0 1px 2px rgba(0,0,0,0.3);">';
echo $disclaimer;
echo '</span>';
echo '</div>';
echo '</div>';

echo "<br><p><a href='" . base_url() . "gallery'>← Back to Gallery Page</a></p>\n";
echo "<p><em>You can delete this file after debugging.</em></p>\n";
?>
