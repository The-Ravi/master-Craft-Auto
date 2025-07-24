
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Service Orders</title>
    <!-- top file include start -->
     <?php $this->load->view('themes/backend/common/top-include'); ?>
    <!-- top file include start -->
    <style type="text/css">
        /* Upload Area */
        .dropzone{
             width: 98%;
              margin: 1%
              border: 2px dashed #3498db !important;
              border-radius: 5px;
              transition: .2s;
        }
 

  
.dropzone.dz-drag-hover{
  border: 2px solid #3498db !important;
}
  

.dz-message.needsclick img{
    width: 50px;
    display: block;
    margin: auto;
    opacity: .6;
    margin-bottom: 15px ;
}
  
  
.dz-message.needsclick img span.plus{
  display: none;
}
.dropzone.dz-started .dz-message{

  display: inline-block !important;
  width: 120px;
  float: right;
  border: 1px solid rgba(238, 238, 238, 0.36);
  border-radius: 30px;
  height: 120px;
  margin: 16px;
  transition: .2s;
}

  .dropzone.dz-started .dz-message span.text{

    display: none;
  }
 .dropzone.dz-started .dz-message span.plus{
    display: block;
    font-size: 70px;
    color: #AAA;
    line-height: 110px;
  }
    

    </style>
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
                    <h2>Service Orders</h2>
                    <a href="<?php echo base_url(); ?>orders/Ordercontroller/exportToCsv" class="button add"><i class="fas fa-download"></i>Export to Csv</a>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="plans-list">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-bordered table-striped text-nowrap" id="servicesTable">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>Order Id</th>
                                                <th>Mobile No</th>
                                                <th>Brand Name</th>
                                                <th>Model Name</th>
                                                <th>Service</th>
                                                <th>Fuel Type</th>
                                                <th>Order Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        if($orders != ""){
                                            $n=1;
                                             foreach ($orders as $key => $value) {
                                        ?>
                                            <tr>
                                                <td><?php echo $n; ?></td>
                                                <td><?php echo $value->id;?></td>
                                                <td><?php echo $value->mobile;?></td>
                                                <td><?php echo $value->brand_name;?></td>
                                                <td><?php echo $value->model_name;?></td>
                                                <td><?php if(isset($value->Servicelist['title'])){echo implode(', ',$value->Servicelist['title']); }?></td>
                                                <td><?php echo $value->petrol_type;?></td>
                                                <td><?php echo date('d-M-Y', strtotime($value->created_at));?></td>
                                                <td><?php if($value->status==1){echo  "Active";}else{echo  "Inctive";} ?></td>
                                                <td>
                                                    <div class="buttons">
                                                        <a href="<?php echo base_url(); ?>admin/order-details/view/<?php echo $value->id ?>"><i class="far fa-eye" title="View"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                        $n++;
                                             }
          	                                }
                                        ?>
                                        </tbody>
                                    </table>
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
        <script>
            $('#servicesTable').dataTable({
                ordering: false
            });
        </script>
    </div>
</body>

</html>
