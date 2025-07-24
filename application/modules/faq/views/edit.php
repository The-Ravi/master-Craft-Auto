<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit FAQ</title>
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
                    <h2>Edit FAQ</h2>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="create-test-name">
                                <div class="header-name">
                                    <h3>Edit FAQ</h3>
                                </div>
                                <div class="create-test-name">
                                    <form action="<?php echo base_url(); ?>faq/Faqcontroller/updateFaq/<?php echo $row->id; ?>" method="post">
                                       <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <label>Question</label>
                                                    <input type="text" name="question" class="form-control" placeholder="Question" value="<?php echo $row->question; ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <label>Answer</label>
                                                    <div class="d-flex">
                                                       <input type="text" name="answer[]" class="form-control" placeholder="Answer" value="<?php echo $row->answers[0]->answer; ?>">
                                                        <button type="button" class="button add ml-1" onclick="addMore();"><i class="fas fa-plus"></i></button> 
                                                    </div>
                                                    <div class="faq_answer_add_more">
                                                        <?php foreach ($row->answers as $key => $value): ?>
                                                            <?php if ($key > 0): ?>
                                                                <div class="d-flex mt-3 remove">
                                                                   <input type="text" name="answer[]" class="form-control" placeholder="Answer" value="<?php echo $value->answer; ?>">
                                                                    <button type="button" class="button add ml-1" onclick="addMore();"><i class="fas fa-plus"></i></button> 
                                                                    <button type="button" class="button add ml-1" onclick="removeAddMore(this);"><i class="fas fa-minus"></i></button> 
                                                                </div>
                                                            <?php endif ?>
                                                        <?php endforeach ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <label>Set Position</label>
                                                    <input type="number" name="set_position" class="form-control" placeholder="Set Position" value="<?php echo $row->set_position; ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select name="status" class="form-control">
                                                         <option value="1" <?php if ($row->status == 1) {
                                                             echo "selected";
                                                         } ?>>Active</option> 
                                                         <option value="2" <?php if ($row->status == 2) {
                                                             echo "selected";
                                                         } ?>>Inactive</option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="create-button">
                                                    <button type="submit" class="button add">Submit</button>
                                                </div>
                                            </div>
                                        </div> 
                                    </form>
                                    
                                </div>
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
<script type="text/javascript">
    var x = 1;
    var limit = 5;
    const addMore = () => {
        var html = `<div class="d-flex mt-3 remove">
                       <input type="text" name="answer[]" class="form-control" placeholder="Answer">
                        <button type="button" class="button add ml-1" onclick="addMore();"><i class="fas fa-plus"></i></button> 
                        <button type="button" class="button add ml-1" onclick="removeAddMore(this);"><i class="fas fa-minus"></i></button> 
                    </div>`;
    if (x < limit) {
        $('.faq_answer_add_more').append(html);
    }

    }

    const removeAddMore = (e) => {
        $(e).parent('.remove').remove();
    }
</script>
