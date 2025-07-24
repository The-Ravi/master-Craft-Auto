<!DOCTYPE html>
<html lang="en">

<head>
    <title>Change Password</title>
    <!-- top file include start -->
    <?php $this->load->view('themes/backend/common/top-include'); ?>
    <!-- top file include start -->
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
                    <h2>Reset Password</h2>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="change-password">
                                <div class="header-name">
                                    <h3>Change Password</h3>
                                </div>
                                <div class="password-field">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" name="oldPassword" class="form-control" placeholder="Old Password">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" name="newPassword" class="form-control" placeholder="New Password">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="reset-button">
                                                <button type="button" class="button">Reset Password</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- content end -->

        <!-- footer start -->
        <?php $this->load->view('themes/backend/common/footer'); ?>
        <?php $this->load->view('themes/backend/common/bottom-include'); ?>
        <!-- footer end -->
    </div>
</body>

</html>