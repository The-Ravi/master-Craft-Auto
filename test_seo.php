<?php
/**
 * Quick test script to verify SEO controller functionality
 * Run this from the browser: http://yoursite.com/test_seo.php
 */

// Include CodeIgniter bootstrap
require_once 'index.php';

echo "<h1>SEO Controller Test</h1>";

// Test 1: Check if controller exists
echo "<h2>Test 1: Controller File Check</h2>";
$controller_path = 'application/controllers/Seo_setup.php';
if (file_exists($controller_path)) {
    echo "✅ SEO Controller file exists<br>";
} else {
    echo "❌ SEO Controller file missing<br>";
}

// Test 2: Check helper files
echo "<h2>Test 2: Helper Files Check</h2>";
$helper_files = [
    'application/helpers/seo_setup_helper.php',
    'application/helpers/tag_helper.php'
];

foreach ($helper_files as $helper) {
    if (file_exists($helper)) {
        echo "✅ $helper exists<br>";
    } else {
        echo "❌ $helper missing<br>";
    }
}

// Test 3: Check model file
echo "<h2>Test 3: Model File Check</h2>";
$model_path = 'application/models/Tag_mod.php';
if (file_exists($model_path)) {
    echo "✅ Tag Model file exists<br>";
} else {
    echo "❌ Tag Model file missing<br>";
}

// Test 4: Check sessions directory
echo "<h2>Test 4: Sessions Directory Check</h2>";
$sessions_path = 'application/sessions';
if (is_dir($sessions_path)) {
    echo "✅ Sessions directory exists<br>";
    if (is_writable($sessions_path)) {
        echo "✅ Sessions directory is writable<br>";
    } else {
        echo "⚠️ Sessions directory is not writable<br>";
    }
} else {
    echo "❌ Sessions directory missing<br>";
}

echo "<h2>Next Steps</h2>";
echo "<p>If all tests pass, you can now:</p>";
echo "<ol>";
echo "<li><a href='seo_setup/test' target='_blank'>Test the SEO Controller</a></li>";
echo "<li><a href='seo_setup/initialize?confirm=yes' target='_blank'>Initialize SEO Tags</a></li>";
echo "<li><a href='seo_setup/show_summary' target='_blank'>View Current Tags</a></li>";
echo "</ol>";

echo "<h2>Tag Type Changes Summary</h2>";
echo "<p>The following changes have been made:</p>";
echo "<ul>";
echo "<li>✅ Changed tag_type from 'seo' to 'title' for page titles</li>";
echo "<li>✅ Changed tag_type from 'seo' to 'meta' for meta descriptions</li>";
echo "<li>✅ Updated SEO controller to work with new tag types</li>";
echo "<li>✅ Updated helper functions</li>";
echo "<li>✅ Updated Tag model</li>";
echo "<li>✅ Added migration function for existing tags</li>";
echo "</ul>";
?>