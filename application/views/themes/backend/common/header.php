<!-- preloader start -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url(); ?>assets/backend/images/preloader.gif" alt="logo" width="150" height="150" />
</div>
<!-- preloader start -->

<!-- top navbar start -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- toggle button start -->
    <ul class="navbar-nav toggleButton">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i onclick="toggleOpen()" id="toggleOpen"  class="fas fa-bars"></i>
                <i onclick="toggleClose()" id="toggleClose"  class="fas fa-times d-none"></i>
            </a>
        </li>
    </ul>
    <!-- toggle button end -->

    <!-- admin user start -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i> Admin <span class="badge badge-warning navbar-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="<?php echo base_url(); ?>admin/change-password" class="dropdown-item"><i class="fas fa-lock"></i> Change Password</a>
                <a href="<?php echo base_url(); ?>admin/Admincontroller/logout" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </li>
    </ul>
    <!-- admin user end -->
</nav>
<!-- top navbar end -->

<!-- left sidebar start -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo base_url(); ?>admin/dashboard" class="brand-link">
        <img src="<?php echo base_url(); ?>assets/backend/images/logo.png" alt="logo" class="brand-image img-circle elevation-3" />
        <span class="brand-text font-weight-light">Craft Admin</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="<?php echo base_url(); ?>admin/dashboard" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard</p>
                    </a>
                </li>    
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i><p>Service Management<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/service-category" class="nav-link">
                                <i class="nav-icon fas fa-arrow-circle-right"></i><p>Service Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/service" class="nav-link">
                                <i class="nav-icon fas fa-arrow-circle-right"></i><p>Service</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i><p>Contact Management<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/contact" class="nav-link">
                                <i class="nav-icon fas fa-arrow-circle-right"></i><p>Contact</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i><p>Cars Management<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/cars" class="nav-link">
                                <i class="nav-icon fas fa-arrow-circle-right"></i><p>Cars</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i><p>Orders Management<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/orders" class="nav-link">
                                <i class="nav-icon fas fa-arrow-circle-right"></i><p>Orders</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i><p>Photos Management<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/photos" class="nav-link">
                                <i class="nav-icon fas fa-arrow-circle-right"></i><p>Photos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i><p>Videos Management<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/videos" class="nav-link">
                                <i class="nav-icon fas fa-arrow-circle-right"></i><p>Videos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i><p>FAQ Management<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/faq" class="nav-link">
                                <i class="nav-icon fas fa-arrow-circle-right"></i><p>FAQ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/faq-user-question" class="nav-link">
                                <i class="nav-icon fas fa-arrow-circle-right"></i><p>FAQ User Question</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Tag Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/tags" class="nav-link">
                                <i class="nav-icon fas fa-arrow-circle-right"></i>
                                <p>Tag List</p>
                            </a>
                        </li>
        <!--
            Add more nested items here if you want (e.g., Add Tag, Tag Settings).
        -->
    </ul>
</li>
            </ul>
        </nav>
    </div>
</aside>
<!-- left sidebar end -->