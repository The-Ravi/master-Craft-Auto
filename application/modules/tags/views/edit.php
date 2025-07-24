<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Tag</title>
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
                    <h2>Edit Tag</h2>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="edit-tag-form">
                                <div class="header-name">
                                    <h3>Edit Tag</h3>
                                </div>
                                <form action="<?php echo base_url(); ?>admin/tags/updateTag/<?php echo $row->id; ?>" method="post">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Page</label>
                                                <input type="text" name="page" class="form-control" placeholder="Page" value="<?php echo htmlspecialchars($row->page); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Tag Type</label>
                                                <input type="text" name="tag_type" class="form-control" placeholder="Tag Type" value="<?php echo htmlspecialchars($row->tag_type); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Tag Key</label>
                                                <input type="text" name="tag_key" class="form-control" placeholder="Tag Key" value="<?php echo htmlspecialchars($row->tag_key); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Tag Value</label>
                                                <input type="text" name="tag_value" class="form-control" placeholder="Tag Value" value="<?php echo htmlspecialchars($row->tag_value); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <div class="create-button">
                                                    <button type="submit" class="button add">Update</button>
                                                    <a href="<?php echo base_url('admin/tags'); ?>" class="btn btn-secondary ml-2">Cancel</a>
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
        <!-- content end -->

        <!-- footer start -->
        <?php $this->load->view('themes/backend/common/footer.php'); ?>
        <?php $this->load->view('themes/backend/common/bottom-include'); ?>
        <!-- footer end -->
    </div>
</body>
</html>