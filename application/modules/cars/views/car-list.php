
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cars</title>
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
                    <h2>Cars Model</h2>
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
                                            <th>Id</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        if($cars != ""){
                                            $n=1;
                                             foreach ($cars as $key => $value) {
                                        ?>
                                            <tr>
                                                <td><?php echo $value->id;?></td>
                                                
                                                <td><?php echo $value->name;?></td>
                                                
                                                <td> <img src="<?php echo base_url() ?>uploads/cars/<?php echo $value->car_image; ?>" height="70px"></td>
                                                <td><?php if($value->status==1){echo  "Active";}else{echo  "Inctive";} ?></td>
                                                <td>
                                                    <div class="buttons">
                                                        <a href="<?php echo base_url(); ?>admin/cars/edit/<?php echo $value->id ?>"><i class="far fa-edit" title="Edit"></i></a>
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
            $('#servicesTable').dataTable();
        </script>
    </div>
</body>

</html>
