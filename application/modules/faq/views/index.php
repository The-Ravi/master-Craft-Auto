
<!DOCTYPE html>
<html lang="en">

<head>
    <title>FAQ</title>
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
                    <h2>FAQ</h2>
                    <button type="button" class="button add" onclick="location.href='<?php echo base_url(); ?>admin/faq/add'"><i class="fas fa-plus"></i>Add FAQ</button>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="plans-list">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-bordered table-striped text-nowrap" id="serviceCategoryTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Sort Order</th>
                                                <th>Created Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
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
<script src="<?php echo base_url(); ?>assets/backend/js/notify.js"></script>
<script type="text/javascript">
    var BASE_URL = '<?php echo base_url(); ?>';

    $(document).ready(()=>{
        getAllServiceCategory();
    });

    const getAllServiceCategory = () => {
        $('#serviceCategoryTable').dataTable({
            language:{
                searchPlaceholder: 'Searching...'
            },
            'processing':true,
            'serverSide': true,
            'serverMethod':'POST',
            'ajax':{
                'url': `${BASE_URL}faq/Faqcontroller/getAllFaq`,
            },
            'columns':[
                {data:'id'},
                {data:'question'},
                {data:'answer'},
                {data:'sort_order'},
                {data:'created_at'},
                {data:'status'},
                {data:'action'},
            ],
            destroy:true
        });
    }

    const deleteFaq = async (e) =>{
        try {

           var checkConfirm = confirm('Do you want to delete?');
           if (checkConfirm) {
                let id = $(e).attr('data-id');
                const form_data = new FormData();
                form_data.append('id', id);
                const res = await fetch('<?php echo base_url(); ?>faq/Faqcontroller/faqDelete',{
                    method: 'POST',
                    body: form_data
                });
                const response = await res.json();
                if (response.status == 200) {
                    $.notify(response.message,'success');
                    getAllServiceCategory();
                }else{
                  console.log(response);  
                }
           }else{
            return false;
           }
        } catch(error){
            console.log(error);
            return false;
        }
    }
</script>