<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create New Tag</title>
    <!-- top file include start -->
    <?php $this->load->view('themes/backend/common/top-include'); ?>
    <!-- top file include end -->
</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    <div class="wrapper">
        <!-- header start -->
        <?php $this->load->view('themes/backend/common/header'); ?>
        <!-- header end -->

        <!-- content start -->
        <section class="content-wrapper">
            <div class="breadcrumbs">
                <div class="container-fluid">
                    <h2>Create New Tag</h2>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="create-tag-form">
                                <div class="header-name">
                                    <h3>Create New Tag</h3>
                                </div>
                                <form action="<?php echo base_url(); ?>admin/tags/saveTag" method="post">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Page</label>
                                                <select name="page" class="form-control" required>
                                                    <option value="">Select Page</option>
                                                    <option value="home_index">Home Index</option>
                                                    <option value="home_services">Services</option>
                                                    <option value="home_services_details">Service Details</option>
                                                    <option value="home_denting_painting">Denting & Painting</option>
                                                    <option value="home_aboutus">About Us</option>
                                                    <option value="home_gallery">Gallery</option>
                                                    <option value="home_centers">Service Centers</option>
                                                    <option value="home_faq">FAQ</option>
                                                    <option value="home_video">Videos</option>
                                                    <option value="home_insurance">Insurance</option>
                                                    <option value="home_testimonials">Testimonials</option>
                                                    <option value="home_thankyou">Thank You</option>
                                                    <option value="admin_login">Admin Login</option>
                                                </select>
                                                <small class="form-text text-muted">Select the page this tag applies to</small>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Tag Type</label>
                                                <select name="tag_type" class="form-control" required>
                                                    <option value="">Select Type</option>
                                                    <option value="title">Title</option>
                                                    <option value="meta">Meta Description</option>
                                                    <option value="keywords">Meta Keywords</option>
                                                    <option value="robots">Robots Meta</option>
                                                    <option value="og">Open Graph</option>
                                                    <option value="twitter">Twitter Cards</option>
                                                    <option value="content">Content</option>
                                                    <option value="image_alt">Image Alt Text</option>
                                                </select>
                                                <small class="form-text text-muted">Choose the type of tag</small>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label>Tag Key</label>
                                                <input type="text" name="tag_key" class="form-control" placeholder="e.g., home_index_title, home_services_meta_description" required>
                                                <small class="form-text text-muted">
                                                    For SEO tags use format: page_title or page_meta_description<br>
                                                    Examples: home_index_title, home_services_meta_description
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label>Tag Value</label>
                                                <textarea name="tag_value" class="form-control" rows="3" placeholder="Enter the tag content..." required></textarea>
                                                <small class="form-text text-muted">
                                                    <span id="char-count">0</span> characters
                                                    <span id="seo-guide" style="display:none;">
                                                        <br><strong>SEO Guidelines:</strong>
                                                        <span id="title-guide" style="display:none;">Titles: 30-60 characters (optimal: 50-60)</span>
                                                        <span id="desc-guide" style="display:none;">Meta Descriptions: 50-160 characters (optimal: 150-160)</span>
                                                    </span>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="create-button">
                                                <button type="submit" class="button add">Submit</button>
                                                <a href="<?php echo base_url('admin/tags'); ?>" class="btn btn-secondary ml-2">Cancel</a>
                                            </div>
                                        </div>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- content end -->

        <!-- footer start -->
        <?php $this->load->view('themes/backend/common/footer.php'); ?>
        <?php $this->load->view('themes/backend/common/bottom-include'); ?>
        
        <script>
        $(document).ready(function() {
            // Character count and SEO guidelines
            $('textarea[name="tag_value"]').on('input', function() {
                var length = $(this).val().length;
                $('#char-count').text(length);
                
                var tagKey = $('input[name="tag_key"]').val();
                if (tagKey.includes('_title')) {
                    $('#seo-guide, #title-guide').show();
                    $('#desc-guide').hide();
                    if (length < 30) {
                        $('#char-count').css('color', 'red');
                    } else if (length > 60) {
                        $('#char-count').css('color', 'orange');
                    } else {
                        $('#char-count').css('color', 'green');
                    }
                } else if (tagKey.includes('_meta_description')) {
                    $('#seo-guide, #desc-guide').show();
                    $('#title-guide').hide();
                    if (length < 50) {
                        $('#char-count').css('color', 'red');
                    } else if (length > 160) {
                        $('#char-count').css('color', 'orange');
                    } else {
                        $('#char-count').css('color', 'green');
                    }
                } else {
                    $('#seo-guide').hide();
                    $('#char-count').css('color', 'black');
                }
            });
            
            // Auto-generate tag key based on page and type selection
            $('select[name="page"], input[name="tag_key"]').on('change', function() {
                $('textarea[name="tag_value"]').trigger('input');
            });
            
            // Quick fill for common SEO tags
            $('select[name="page"]').on('change', function() {
                var page = $(this).val();
                var suggestions = {
                    'home_index': 'Transform Your Wheels With Car Detailing | Mastercraft',
                    'home_services': 'Professional Car Services | Mastercraft',
                    'home_aboutus': 'About Us - Leading Car Care Experts | Mastercraft',
                    'home_gallery': 'Car Transformation Gallery | Mastercraft',
                    'home_centers': 'Service Centers Near You | Mastercraft'
                };
                
                if (suggestions[page] && $('input[name="tag_key"]').val().includes('_title')) {
                    $('textarea[name="tag_value"]').attr('placeholder', 'Suggested: ' + suggestions[page]);
                }
            });
        });
        </script>
        
        <!-- footer end -->
    </div>
</body>
</html>