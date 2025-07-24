<?php
/**
 * SEO Head Component - Manages titles and meta descriptions using tag system
 * Usage: Include this file in page templates and pass $page_identifier and $tags
 */

// Default fallback values
$default_title = "Transform Your Wheels With Car Detailing | Mastercraft";
$default_description = "Mastercraft is the best auto destination for car detailing, car denting, painting, ceramic coating & much more. Book Today and turn your car into a masterpiece.";

// Get page-specific title and description from tags
$page_title = isset($tags) ? get_tag($tags, $page_identifier . '_title', $default_title) : $default_title;
$page_description = isset($tags) ? get_tag($tags, $page_identifier . '_meta_description', $default_description) : $default_description;

// Additional meta tags that can be managed via tags
$page_keywords = isset($tags) ? get_tag($tags, $page_identifier . '_meta_keywords', '') : '';
$og_title = isset($tags) ? get_tag($tags, $page_identifier . '_og_title', $page_title) : $page_title;
$og_description = isset($tags) ? get_tag($tags, $page_identifier . '_og_description', $page_description) : $page_description;
$og_image = isset($tags) ? get_tag($tags, $page_identifier . '_og_image', base_url() . 'assets/frontend/images/logo.png') : base_url() . 'assets/frontend/images/logo.png';
?>

<!-- SEO Meta Tags -->
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<?php if(!empty($page_keywords)): ?>
<meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
<?php endif; ?>

<!-- Open Graph Tags -->
<meta property="og:title" content="<?php echo htmlspecialchars($og_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($og_description); ?>">
<meta property="og:image" content="<?php echo $og_image; ?>">
<meta property="og:url" content="<?php echo current_url(); ?>">
<meta property="og:type" content="website">

<!-- Twitter Card Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($og_title); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($og_description); ?>">
<meta name="twitter:image" content="<?php echo $og_image; ?>">

<!-- Additional SEO meta tags -->
<meta name="robots" content="<?php echo isset($tags) ? get_tag($tags, $page_identifier . '_robots', 'index,follow') : 'index,follow'; ?>">
<link rel="canonical" href="<?php echo current_url(); ?>">