
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Service Category</title>
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
                    <h2>Service Category</h2>
                    <button type="button" class="button add" data-toggle="modal" data-target="#addCategory"><i class="fas fa-plus"></i>Add Service Category</button>
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
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Title</th>
                                                <th>Sort Order</th>
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

        <!-- add pricing popup start -->
        <div class="modal-popup-layout modal fade" id="addCategory" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4><i class="fas fa-plus"></i> Add Category</h4>
                        <button data-dismiss="modal"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-fields">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Category Name<sup>*</sup></label>
                                        <input type="text" class="form-control cate_name" placeholder="Enter Category Name">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Title<sup>*</sup></label>
                                        <input type="text" class="form-control title" placeholder="Enter Title">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Status<sup>*</sup></label>
                                        <select class="form-control form-select status">
                                            <option value="1" selected="selected">Active</option>
                                            <option value="2">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Sort Order<sup>*</sup></label>
                                        <input type="number" class="form-control sort_order" placeholder="Sort Order">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Logo<sup>*</sup></label>
                                        <input type="file" class="form-control addlogo" accept="image/*" onchange="loadFile(event);">
                                        <br>
                                        <img id="output" width="70px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <ul>
                                <li><button class="button add" type="button" id="saveSrCategory"><i class="fas fa-plus"></i>Add</button></li>
                                <li><button class="button closed" data-dismiss="modal"><i class="fas fa-times"></i>Close</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- add pricing popup end -->

        <!-- edit pricing popup start -->
        <div class="modal-popup-layout modal fade" id="editCategory" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4><i class="fas fa-edit"></i> Edit Category</h4>
                        <button data-dismiss="modal"><i class="fas fa-times"></i></button>
                    </div>
                    <input type="hidden" name="" class="editCategoryId">
                    <div class="modal-body">
                        <div class="form-fields">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" class="form-control cate_name" placeholder="Enter Category Name">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control title" placeholder="Enter Title">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control form-select status">
                                            <option value="1" selected="selected">Active</option>
                                            <option value="2">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Sort Order</label>
                                        <input type="number" class="form-control sort_order" placeholder="Sort Order">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <input type="file" class="form-control editlogo" accept="image/*" onchange="loadFile(event)">
                                        <input type="hidden" name="" class="oldCateImg">
                                        <br>
                                        <img id="outputss" class="editCateImg" width="70px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <ul>
                                <li><button class="button add" type="button" onclick="updateServiceCategory();"><i class="fas fa-check"></i>Update</button></li>
                                <li><button class="button closed" data-dismiss="modal"><i class="fas fa-times"></i>Close</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- edit pricing popup end -->

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
                'url': `${BASE_URL}service-category/Servicecategory/getAllServiceCategory`,
                'data': (d)=>{
                    d.getAllCategory_request = "true"
                }
            },
            'columns':[
                {data:'id'},
                {data:'image'},
                {data:'name'},
                {data:'title'},
                {data:'sort_order'},
                {data:'status'},
                {data:'action'},
            ],
            destroy:true
        });
    }

    


    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
          URL.revokeObjectURL(output.src) // free memory
        }
    };

    // Add category......

    $('#saveSrCategory').on('click', async ()=>{
        $('.error_class').remove();
        const cate_name = $('#addCategory').find('.cate_name').val();
        const title = $('#addCategory').find('.title').val();
        const status = $('#addCategory').find('.status').val();
        const sort_order = $('#addCategory').find('.sort_order').val();
        const logo = $('#addCategory').find('.addlogo')[0].files[0];
        
        if (!cate_name) {
            $('#addCategory').find('.cate_name').after('<div class="error_class">This field is required.</div>');
            $('.error_class').css('color','darkred');
            $('.error_class').css('font-size','14px');
            $('#addCategory').find('.cate_name').focus();
            return false;
        }

        if (!title) {
            $('#addCategory').find('.title').after('<div class="error_class">This field is required.</div>');
            $('.error_class').css('color','darkred');
            $('.error_class').css('font-size','14px');
            $('#addCategory').find('.title').focus();
            return false;
        }
        
        if (!sort_order) {
            $('#addCategory').find('.sort_order').after('<div class="error_class">This field is required.</div>');
            $('.error_class').css('color','darkred');
            $('.error_class').css('font-size','14px');
            $('#addCategory').find('.sort_order').focus();
            return false;
        }

        const form_data = new FormData();
        form_data.append('cate_name', cate_name);
        form_data.append('title', title);
        form_data.append('sort_order', sort_order);
        form_data.append('status', status);
        form_data.append('logo', logo);
        const res = await fetch(`${BASE_URL}service-category/Servicecategory/addServiceCategory`,{
            method: 'POST',
            body: form_data   
        });
        const response = await res.json();
        if (response.status == 200) {
           $('#addCategory').modal('hide');
           $('#addCategory').find('.cate_name').val('').change();
           $('#addCategory').find('.title').val('');
           $('#addCategory').find('.status').val('').change();
           $('#addCategory').find('.sort_order').val('');
           $.notify(response.message, 'success');
           getAllServiceCategory(); 
        }else{
            $.notify(response.message); 
        }
    });

    const editServiceCategory = async (e) => {
        try {
            var id = $(e).attr('data-id');
            const form_data = new FormData();
            form_data.append('id', id);
            const res = await fetch(`${BASE_URL}service-category/Servicecategory/getServiceCategoryById`,{
                method: 'POST',
                body: form_data
            });
            const response = await res.json();
            if (response.status == 200) {
                let data = response.data;
                let imgUrl = `${BASE_URL}uploads/category/${data.logo}`;
                $('#editCategory').find('.cate_name').val(data.cate_name);
                $('#editCategory').find('.title').val(data.title);
                $('#editCategory').find('.sort_order').val(data.short_order);
                $('#editCategory').find('.status').val(data.status).change();
                $('#editCategory').find('.oldCateImg').val(data.logo);
                $('#editCategory').find('.editCategoryId').val(data.id);
                $('#editCategory').find('.editCateImg').attr('src',imgUrl);
                $('#editCategory').modal('show');
                console.log(data);
            }else{
                console.log(response);
            }
        } catch(error){
            console.log(error);
        }
    }

    const deleteServiceCategory = async (e) => {
        try {

            var confirmCheck = confirm('Do you want to delete?');
            if (confirmCheck == true) {
                var id = $(e).attr('data-id');
                const form_data = new FormData();
                form_data.append('id', id);
                const res = await fetch(`${BASE_URL}service-category/Servicecategory/deleteServiceCategoryById`,{
                    method: 'POST',
                    body: form_data
                });

                const response = await res.json(); 
                if (response.status == 200) {
                    $.notify(response.message,'success');
                    getAllServiceCategory();
                }else{
                    $.notify(response.message); 
                    return false;
                } 
            }else{
                return false;
            }
            
        } catch(error) {
            console.log(error);
        }
    }

    const updateServiceCategory = async () => {
        try {
            const id = $('#editCategory').find('.editCategoryId').val();
            const cate_name = $('#editCategory').find('.cate_name').val();
            const title = $('#editCategory').find('.title').val();
            const sort_order = $('#editCategory').find('.sort_order').val();
            const status = $('#editCategory').find('.status').val();
            const old_logo = $('#editCategory').find('.oldCateImg').val();
            const logo = $('#editCategory').find('.editlogo')[0].files[0];

            const form_data = new FormData();
            form_data.append('id', id);
            form_data.append('cate_name', cate_name);
            form_data.append('sort_order', sort_order);
            form_data.append('title', title);
            form_data.append('status', status);
            form_data.append('old_logo', old_logo);
            form_data.append('logo', logo);

            const res = await fetch(`${BASE_URL}service-category/Servicecategory/updateServiceCategoryById`,{
                method: 'POST',
                body: form_data
            });

            const response = await res.json();
            if (response.status == 200) {
                $.notify(response.message, 'success');
                $('#editCategory').modal('hide');
                getAllServiceCategory();
            }else{
                $.notify(response.message);
                console.log(response);
                return false;
            }

        } catch(error) {
            console.log(error);
        }
    }
</script>