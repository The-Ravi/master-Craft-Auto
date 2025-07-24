
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Photos</title>
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
                    <h2>Photos</h2>
                    <button type="button" class="button add" onclick="showModals();"><i class="fas fa-plus"></i>Add Photos</button>
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
                                                <th>Category</th>
                                                <th>Title</th>
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
        <div class="modal-popup-layout modal fade" id="photosModels" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="addPhoto_"><i class="fas fa-plus"></i> Add Photo</h4>
                        <h4 class="editPhoto_ d-none"><i class="fas fa-edit"></i> Edit Photo</h4>
                        <button data-dismiss="modal"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id">
                        <div class="form-fields">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Title<sup>*</sup></label>
                                        <input type="text" class="form-control title" placeholder="Enter Title">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Category<sup>*</sup></label>
                                        <select class="form-control category_">
                                            <option value="">select category</option>
                                            <?php foreach($categories as $cate): ?>
                                            <option value="<?= $cate->id ?>"><?= $cate->cate_name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Status<sup>*</sup></label>
                                        <select class="form-control form-select status_">
                                            <option value="1" selected="selected">Active</option>
                                            <option value="2">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Image<sup>*</sup></label>
                                        <input type="file" class="form-control image" accept="image/*">
                                        <br>
                                        <img id="output" width="70px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <ul>
                                <li><button class="button add" type="button" id="saveSrCategory" onclick="handleSubmitPhotos();"><i class="fas fa-plus"></i>Submit</button></li>
                                <li><button class="button closed" data-dismiss="modal"><i class="fas fa-times"></i>Close</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- add pricing popup end -->

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
        getAllPhotos();
    });

    const showModals = () => {
        $('#photosModels').find('.editPhoto_').addClass('d-none');
        $('#photosModels').find('.addPhoto_').removeClass('d-none');
        $('#photosModels').modal('show');
        $('#photosModels').find('input').val('');
         $('#photosModels').find('select').val('');
        $('#photosModels').find('#output').attr('src','');
    }

    const getAllPhotos = () => {
        $('#serviceCategoryTable').dataTable({
            language:{
                searchPlaceholder: 'Searching...'
            },
            'processing':true,
            'serverSide': true,
            'serverMethod':'POST',
            'ajax':{
                'url': `${BASE_URL}admin/photos/list`,
                'data': (d)=>{
                    d.getAllCategory_request = "true"
                }
            },
            'columns':[
                {data:'id'},
                {data:'image'},
                {data:'category'},
                {data:'title'},
                {data:'status'},
                {data:'action'},
            ],
            destroy:true
        });
    }


    // Add category......

    const handleSubmitPhotos = async () => {
        try {
            $('.error_class').remove();
            let id = $('#photosModels').find('input[name="id"]').val();
            let tittle = $('#photosModels').find('.title').val();
            let category = $('#photosModels').find('.category_').val();
            let status = $('#photosModels').find('.status_').val();
            let image = $('#photosModels').find('.image')[0].files[0];
            if (!tittle) {
                $('#photosModels').find('.title').after('<div class="error_class">This field is required</div>');
                $('.error_class').css({
                    'color' : 'darkred',
                    'font-size' : '14px'
                });
                $('#photosModels').find('.title').focus();
                return false;
            }

            if (!category) {
                $('#photosModels').find('.category_').after('<div class="error_class">This field is required</div>');
                $('.error_class').css({
                    'color' : 'darkred',
                    'font-size' : '14px'
                });
                $('#photosModels').find('.category_').focus();
                return false;
            }

            if (!id) {
                if (!image) {
                    $('#photosModels').find('.image').after('<div class="error_class">This field is required</div>');
                    $('.error_class').css({
                        'color' : 'darkred',
                        'font-size' : '14px'
                    });
                    $('#photosModels').find('.image').focus();
                    return false;
                }
            }

            const form_data = new FormData();
            form_data.append('id', id);
            form_data.append('tittle', tittle);
            form_data.append('category', category);
            form_data.append('status', status);
            form_data.append('image', image);

            const res = await fetch(`${BASE_URL}admin/photos/create`, {
                method : 'POST',
                body : form_data
            });

            const response = await res.json();
            if (response.status == 200) {
                $.notify(response.message,'success');
                $('#photosModels').modal('hide');
                getAllPhotos();
            }else{
                $.notify(response.message); 
                return false;
            } 
            console.log(response);

        } catch (error) {
            console.log(error);
        }
    }

    const editGallery = async (e) => {
        try {
            $('#photosModels').find('.editPhoto_').removeClass('d-none');
            $('#photosModels').find('.addPhoto_').addClass('d-none');
            var id = $(e).attr('data-id');
            if (id) {
                $('#photosModels').find('input[name="id"]').val(id);

                const res = await fetch(`${BASE_URL}admin/photos/edit`,{
                    method: 'POST',
                    body : JSON.stringify({
                        id:id
                    }),
                    headers : {
                        'Content-Type' : 'application/json',
                        'Accept' : 'application/json'
                    }
                });

                const response = await res.json();
                if (response.status == 200) {
                   let photos = response.data;
                    $('#photosModels').find('.title').val(photos.tittle);
                    $('#photosModels').find('.category_').val(photos.cate_id).change();
                    $('#photosModels').find('.status_').val(photos.status).change();
                   let imageurl = `${BASE_URL}uploads/galleries/${photos.image}`;
                   $('#photosModels').find('#output').attr('src',imageurl);
                   $('#photosModels').modal('show');
                }else if (response.status == 202){
                    $.notify(response.message); 
                    return false;
                }else {
                    console.log(response);
                }
            } 
        } catch(error){
            console.log(error);
        }
    }

    const deleteGallery = async (e) => {
        try {
            var confirmCheck = confirm('Do you want to delete?');
            if (confirmCheck == true) {
                var id = $(e).attr('data-id');
                let form_data = JSON.stringify({id:id});
                const res = await fetch(`${BASE_URL}admin/photos/remove`,{
                    method: 'POST',
                    body: form_data,
                    headers : {
                        'Content-Type' : 'application/json',
                        'Accept' : 'application/json'
                    }
                });

                const response = await res.json(); 
                if (response.status == 200) {
                    $.notify(response.message,'success');
                    getAllPhotos();
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
</script>