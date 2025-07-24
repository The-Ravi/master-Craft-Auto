<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Car</title>
    <!-- top file include start -->
    <?php $this->load->view('themes/backend/common/header'); ?>
    <!-- top file include start -->
    
</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    <div class="wrapper">
        <!-- header start -->
        <?php $this->load->view('themes/backend/common/top-include'); ?>
        <!-- header end -->

        <!-- content start -->
       <section class="content-wrapper">
            <div class="breadcrumbs">
                <div class="container-fluid">
                    <!--<h2>Reset Password</h2>-->
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 mx-auto">
                            <div class="change-password">
                                <div class="header-name">
                                    <h3>Edit Car</h3>
                                </div>
                                <?php 
                                     foreach ($car as $key => $value) {
                                ?>
                                <form  method="post" action="<?php echo base_url(); ?>admin/cars/update/<?php echo $value->id ;?>" enctype="multipart/form-data">
                                    <div class="password-field">
                                        <div class="row">
                                            
                                            
                                            
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                                <div class="form-group">
                                                    <label>Car Image <small class="text-muted">Size (365X305 px) (jpg,png,jpeg,webp) </small></label>
                                                    <input type="file" name="car_image" class="form-control" value="<?php echo $value->car_image; ?>">
                                                    <input type="hidden" name="old_car_image" value="<?php echo $value->car_image; ?>">
                                                </div>
                                                <img src="<?php echo base_url() ?>uploads/cars/<?php echo $value->car_image; ?>" style="width: 120px;">
                                            </div>
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select name="status" class="form-control">
                                                         <option value="">Select status.</option>
                                                         <option value="1" <?php if ($value->status==1) {
                                                              echo "selected";
                                                           } ?>>Active</option>
                                                         <option value="0" <?php if ($value->status==0) {
                                                              echo "selected";
                                                           } ?>>Inactive</option>
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-3 mb-5">
                                                <div class="create-button text-right">
                                                    <button type="submit" class="form-btn-table ">Update</button>
                                                </div>
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
        <?php } ?>
        <!-- content end -->

        <!-- footer start -->
        <?php $this->load->view('themes/backend/common/footer'); ?>
        <?php $this->load->view('themes/backend/common/bottom-include'); ?>
        <!-- footer end -->
    </div>
</body>

</html>