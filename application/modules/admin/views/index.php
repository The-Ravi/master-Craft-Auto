
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    // Set page identifier for SEO tags
    $page_identifier = 'admin_login';
    $page_title = isset($tags) ? get_tag($tags, $page_identifier . '_title', 'Admin Login - Mastercraft Auto') : 'Admin Login - Mastercraft Auto';
    $page_description = isset($tags) ? get_tag($tags, $page_identifier . '_meta_description', 'Secure admin login portal for Mastercraft Auto management system') : 'Secure admin login portal for Mastercraft Auto management system';
    ?>
    
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="robots" content="noindex,nofollow">
    
    <!-- top file include start -->
    <?php $this->load->view('themes/backend/common/top-include'); ?>
    <!-- top file include start -->
    <style>
        .login-inner h2 img{
            width: 70px;
        }
        .login-inner h2{
            display: flex;
            align-items: center;
            justify-content: start;
            gap: 20px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    <div class="login">
        
        <div class="login-inner">
            <h2 style="display:flex;"> 
                <img src="<?php echo base_url(); ?>assets/backend/images/logo.png" alt="logo">
                <span>Admin Login</span>
            </h2>
            <form action="javascript:void(0);" id="adminFrom">
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="email" class="form-control email" placeholder="Email Id">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control password" placeholder="Password">
                </div>
                <div class="button">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<script>
    var BASE_URL = '<?php echo base_url(); ?>';
</script>
<!--  bottom file include start -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/js/notify.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/js/admin.js"></script>

    <!-- bottom file include start -->