<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Order Detail</title>
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
                        <div class="col-xl-12 mx-auto">
                            <div class="change-password">
                                <div class="header-name">
                                    <h3>View Order Detail</h3>
                                </div>
                               
                                <table class="table table-bordered">
                                    
                                     <tr>
                                        <td>Model Name </td>
                                        <td><?php echo $order->model_name ?> </td>
                                     </tr>
                                     <tr>
                                        <td>Brand Name </td>
                                        <td><?php echo $order->brand_name ?> </td>
                                     </tr>
                                     <tr>
                                        <td>Fuel Type </td>
                                        <td><?php echo $order->petrol_type ?> </td>
                                     </tr>
                                     <tr>
                                        <td>Service Name </td>
                                        <td><?php  $Servicelists = $order->Servicelist;
                                         $titles = $Servicelists['title'];
                                         
                                              foreach($titles as $title){
                                                $n += 1;
                                                echo $n." - ".$title ;
                                                echo "<br/>";
                                              }
                                            
                                                
                                         ?> </td>
                                     </tr>
                                     </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php// } ?>
        <!-- content end -->

        <!-- footer start -->
        <?php $this->load->view('themes/backend/common/footer'); ?>
        <?php $this->load->view('themes/backend/common/bottom-include'); ?>
        <!-- footer end -->
    </div>
</body>

</html>