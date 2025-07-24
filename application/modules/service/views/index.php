

<!DOCTYPE html>

<html lang="en">



<head>

    <title>Services</title>

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

                    <h2>Services</h2>

                    <button type="button" class="button add" data-toggle="modal" data-target="#addService"><i class="fas fa-plus"></i>Add Services</button>

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

                                                <th>ID</th>

                                                <th>Image</th>

                                                <th>Tittle</th>

                                                <th>Sub Tittle</th>

                                                <th>Inner Tittle</th>

                                                <th>Category</th>

                                                <th>Duration</th>

                                                <th>Description</th>

                                                <th>Short Order</th>

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

        <div class="modal-popup-layout modal fade" id="addService" data-backdrop="static" data-keyboard="false">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">

                        <h4><i class="fas fa-plus"></i> Add Services</h4>

                        <button data-dismiss="modal"><i class="fas fa-times"></i></button>

                    </div>

                    <div class="modal-body">

                        <div class="form-fields">

                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                    <div class="form-group">

                                        <label>Category</label>

                                        <select class="form-control form-select category">

                                            <option value="">Category</option>

                                            <?php foreach ($rows as $row): ?>

                                                <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>

                                            <?php endforeach ?>

                                        </select>

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

                                        <label>Sub Title</label>

                                        <input type="text" class="form-control sub_tittle" placeholder="Sub Title">

                                    </div>

                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                    <div class="form-group">

                                        <label>Inner Title</label>

                                        <input type="text" class="form-control inner_tittle" placeholder="Inner Title">

                                    </div>

                                </div>

                                <!--<div class="col-xl-12 col-lg-12 col-md-12 col-12">-->

                                <!--    <div class="form-group">-->

                                <!--        <label>Duration type</label>-->

                                <!--        <select class="form-control duration_type">-->

                                <!--            <option value=""></option>-->

                                <!--            <option value="Min">Min</option>-->

                                <!--            <option value="Hour">Hour</option>-->

                                <!--        </select>-->

                                <!--    </div>-->

                                <!--</div>-->

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                    <div class="form-group">

                                        <label>Duration</label>

                                        <input type="text" class="form-control duration" placeholder="Enter Title">

                                    </div>

                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                    <div class="form-group">

                                        <label>Short Order</label>

                                        <input type="number" class="form-control short_order" placeholder="Enter Title">

                                    </div>

                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                    <div class="form-group">

                                        <label>Description</label>

                                        <textarea cols="2" class="form-control description"></textarea>

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

                                    <!-- Upload Area -->

                                    <input type="file" accept="image/*" onchange="loadFile(event);" class="form-control image">

                                    <br>

                                    <img id="output" width="70px" />

                                    <!-- End Upload Area -->

                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">

                            <ul>

                                <li><button class="button add" onclick="addServices();"><i class="fas fa-plus"></i>Add</button></li>

                                <li><button class="button closed" data-dismiss="modal"><i class="fas fa-times"></i>Close</button></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- add pricing popup end -->



        <!-- edit pricing popup start -->

        <div class="modal-popup-layout modal fade" id="editServices" data-backdrop="static" data-keyboard="false">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">

                        <h4><i class="fas fa-edit"></i> Edit Services</h4>

                        <button data-dismiss="modal"><i class="fas fa-times"></i></button>

                    </div>

                    <div class="modal-body">

                        <div class="form-fields">

                             <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                    <div class="form-group">

                                        <label>Category</label>

                                        <select class="form-control form-select category">

                                            <option value="">Category</option>

                                            <?php foreach ($rows as $row): ?>

                                                <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>

                                            <?php endforeach ?>

                                        </select>

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

                                        <label>Sub Title</label>

                                        <input type="text" class="form-control sub_tittle" placeholder="Sub Title">

                                    </div>

                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                    <div class="form-group">

                                        <label>Inner Title</label>

                                        <input type="text" class="form-control inner_tittle" placeholder="Inner Title">

                                    </div>

                                </div>

                                <!--<div class="col-xl-12 col-lg-12 col-md-12 col-12">-->

                                <!--    <div class="form-group">-->

                                <!--        <label>Duration type</label>-->

                                <!--        <select class="form-control duration_type">-->

                                <!--            <option value=""></option>-->

                                <!--            <option value="Min">Min</option>-->

                                <!--            <option value="Hour">Hour</option>-->

                                <!--        </select>-->

                                <!--    </div>-->

                                <!--</div>-->

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                    <div class="form-group">

                                        <label>Duration</label>

                                        <input type="text" class="form-control duration" placeholder="Enter Title">

                                    </div>

                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                    <div class="form-group">

                                        <label>Short Order</label>

                                        <input type="number" class="form-control short_order" placeholder="Enter Title">

                                    </div>

                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                    <div class="form-group">

                                        <label>Description</label>

                                        <textarea cols="2" class="form-control description" id="description">edfkhf</textarea>

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

                                <input type="hidden" id="id" name="">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                    <!-- Upload Area -->

                                    <input type="file" accept="image/*" onchange="loadFile(event);" class="form-control image">

                                    <br>

                                    <img id="output" width="70px" />

                                    <input type="hidden" name="" class="old_img">

                                    <!-- End Upload Area -->

                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">

                            <ul>

                                <li><button type="button" onclick="updateServices();" class="button add"><i class="fas fa-check"></i>Update</button></li>

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



<script>

    $('.description').summernote({

        placeholder: 'Description',

        tabsize: 2,

        height: 100,

  toolbar: [

        ['style', ['style']],

        ['font', ['bold', 'italic', 'underline', 'clear']],

        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],

        //['fontname', ['fontname']],

       // ['fontsize', ['fontsize']],

        ['color', ['color']],

        ['para', ['ul', 'ol', 'paragraph']],

        ['height', ['height']],

        ['table', ['table']],

        ['insert', ['link', 'picture', 'hr']],

        ['view', ['fullscreen', 'codeview']],

        ['help', ['help']]

      ],

       callbacks: {

            onImageUpload: function(files, editor, welEditable) {

              sendFile(files[0], editor, welEditable);

            }

        }  

      });

  



    function sendFile(file, editor, welEditable) {

        // alert();

        data = new FormData();

        data.append("file", file);

        $.ajax({

          data: data,

          type: "POST",

          url: "<?php echo base_url(); ?>assets/ckeditor_fileupload/ajaxfile.php",

          cache: false,

          contentType: false,

          processData: false,

          success: function(url) {

            var image = $('<img>').attr('src',url);

            $('.description').summernote("insertNode", image[0]);

          },

          error: function(data) {

            console.log(data);

        }

        });

    }

</script>



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

    $('#servicesTable').dataTable({

        language: {

            searchPlaceholder:'Searching...'

        },

        'processing':true,

        'serverSide':true,

        'serverMethod': 'POST',

        'ajax':{

            'url': `${BASE_URL}service/Servicecontroller/getAllService`

        },

        'columns':[

            {data:'id'},

            {data:'image'},

            {data:'title'},

            {data:'sub_title'},

            {data:'inner_title'},

            {data:'category'},

            {data:'duration'},

            {data:'description'},

            {data:'short_order'},

            {data:'status'},

            {data:'action'}

        ],

        destroy:true

    });

  }



  const addServices = async () => {

    try {

        var cate_id = $('#addService').find('.category').val();

        var title = $('#addService').find('.title').val();

        var sub_tittle = $('#addService').find('.sub_tittle').val();

        var inner_tittle = $('#addService').find('.inner_tittle').val();


        var duration = $('#addService').find('.duration').val();

        var short_order = $('#addService').find('.short_order').val();

        var description = $('#addService').find('.description').val();

        var status = $('#addService').find('.status').val();

        var image = $('#addService').find('.image')[0].files[0];



        const form_data = new FormData();

        form_data.append('cate_id', cate_id);

        form_data.append('title', title);

        form_data.append('sub_tittle', sub_tittle);

        form_data.append('inner_tittle', inner_tittle);
        form_data.append('duration', duration);

        form_data.append('short_order', short_order);

        form_data.append('description', description);

        form_data.append('status', status);

        form_data.append('image', image);



        const res = await fetch(`${BASE_URL}service/Servicecontroller/addServices`, {

            method: 'post',

            body: form_data

        });



        const response = await res.json();

        if (response.status == 200) {

            $.notify(response.message, 'success');

            getAllServices();

            $('#addService').modal('hide');

            $('#addService').find('.title').val('');

            $('#addService').find('.description').val('');

            $('#addService').find('.status').val('').change();

            $('#addService').find('.category').val('').change();

        }else{

            console.log(response);

        }



    } catch(error) {

        console.log(error);

    }

  }



  const editServices = async (e) => {

    try {

        var id = $(e).attr('data-id');



        const form_data = new FormData();

        form_data.append('id', id);



        const res = await fetch('<?php echo base_url(); ?>service/Servicecontroller/getServicesById', {

            method: 'POST',

            body: form_data

        });



        const response = await res.json();

        if (response.status == 200) {

             var data = response.data;

             let imageUrl = '<?php echo base_url(); ?>uploads/services/'+data.image;

             $('#editServices').find('.category').val(data.cate_id).change();

             $('#editServices').find('.title').val(data.tittle);

             $('#editServices').find('.sub_tittle').val(data.sub_title);

             $('#editServices').find('.inner_tittle').val(data.inner_title);

             $('#editServices').find('.duration').val(data.duration);

             $('#editServices').find('.short_order').val(data.short_order);

             $('#editServices').find('#id').val(data.id);

             $('#editServices').find('.old_img').val(data.image);

             $('#editServices').find('#output').attr('src', imageUrl);

             $('#editServices').find('#description').summernote('code',data.description);

             console.log(data.description);

             $('#editServices').find('.status').val(data.status).change();

             $('#editServices').modal('show');

        }

    } catch(error) {

        console.log(error);

    }

  }



  const updateServices = async () => {

    try {



        var id = $('#editServices').find('#id').val();

        var category = $('#editServices').find('.category').val();

        var title = $('#editServices').find('.title').val();

        var sub_tittle = $('#editServices').find('.sub_tittle').val();

        var inner_tittle = $('#editServices').find('.inner_tittle').val();
        var duration = $('#editServices').find('.duration').val();

        var short_order = $('#editServices').find('.short_order').val();

        var description = $('#editServices').find('.description').val();

        var status = $('#editServices').find('.status').val();

        var old_img = $('#editServices').find('.old_img').val();

        var image = $('#editServices').find('.image')[0].files[0];



        const form_data = new FormData();

        form_data.append('cate_id', category);

        form_data.append('title', title);

        form_data.append('sub_tittle', sub_tittle);

        form_data.append('inner_tittle', inner_tittle);
        form_data.append('duration', duration);

        form_data.append('short_order', short_order);

        form_data.append('description', description);

        form_data.append('status', status);

        form_data.append('image', image);

        form_data.append('id', id);

        form_data.append('old_img', old_img);



        const res = await fetch('<?php echo base_url(); ?>service/Servicecontroller/updateServicesById', {

            method: 'POST',

            body: form_data

        });



        const response = await res.json();

        if (response.status == 200) {

            $.notify(response.message, 'success');

            $('#editServices').modal('hide');

            getAllServices();

        }else{

           $.notify(response.message); 

           return false;

        }



    } catch (error) {

        console.log(error);

    }

  }
  const deleteServices  = async (e) =>{
      try{
            const isConfirm = confirm('Do you want to delete?');
            if(isConfirm == true){
                const id =  $(e).attr('data-id');
                const formdata = new FormData();
                formdata.append('id',id);
               const res = await fetch('<?php echo base_url(); ?>service/Servicecontroller/deleteServicesById', {
                    method: 'POST',
                    body: formdata
                });
                
                const response = await res.json();
                 if (response.status == 200) {
                    $.notify(response.message, 'success');
                    getAllServices();
        
                }else{
                   $.notify(response.message); 
                   return false;
        
                } 
            }else{
                return false;
            }
          
      }catch(error){
          console.log(error);
      }
  }

</script>