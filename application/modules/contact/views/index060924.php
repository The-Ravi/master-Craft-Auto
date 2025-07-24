
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
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
                    <h2>Contact</h2>
                    <a href="<?php echo base_url(); ?>contact/Contactcontroller/exportToCsv" class="button add"><i class="fas fa-download"></i>Export to Csv</a>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="plans-list">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-bordered table-striped text-nowrap" id="getAllcontact">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Brand Name</th>
                                                <th>Modal Name</th>
                                                <th>Full Name</th>
                                                <th>Mobile</th>
                                                <th>IP Address</th>
                                                <th>Message</th>
                                                <th>Created Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
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
    </div>
</body>

</html>

<script type="text/javascript">
var BASE_URL = '<?php echo base_url(); ?>';
 var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };

  $(document).ready(()=>{
    getAllServices();
  });

  const getAllServices = () => {
    $('#getAllcontact').dataTable({
        language: {
            searchPlaceholder:'Searching...'
        },
        'processing':true,
        'serverSide':true,
        'serverMethod': 'POST',
        'ajax':{
            'url': `${BASE_URL}contact/Contactcontroller/getAllcontact`
        },
        'columns':[
            {data:'id'},
            {data:'brand_name'},
            {data:'modal_name'},
            {data:'full_name'},
            {data:'mobile'},
            {data:'ip_address'},
            {data:'message'},
            {data:'created_at'}
        ],
        destroy:true
    });
  }

  
</script>