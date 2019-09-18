<?php
include('include/header.php');
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="node_modules\bootstrap\dist\css\training.css">
<!------ Include the above in your HEAD tag ---------->
<script>
$('#file-upload').change(function() {
  var i = $(this).prev('label').clone();
  var file = $('#file-upload')[0].files[0].name;
  $(this).prev('label').text(file);
});
</script>
<style>
.file {
  visibility: hidden;
  position: absolute;
}

</style>
<script>
$(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
});
$(document).on('change', '.file', function(){
  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});
</script>
<div class="container register" style="background: -webkit-linear-gradient(left, #0cbd8c, #40ae69);">
    <div class="row">
        <div class="col-md-3 register-left" style="padding-top:70px">
            <img src="rocket2.png" alt=""/>
            <h3>Welcome</h3>
        </div>
            <div class="col-md-9 register-right">
            <form action="process\process_add_training.php" method="post" enctype="multipart/form-data">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Add a Training</h3>
                        <div class="row register-form">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="t_name" class="form-control" placeholder="Training Name" required />
                                </div>
                                <div class="form-group">
                                    <input type="date" name="t_date"class="form-control" placeholder="Training Date" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="t_size" class="form-control" placeholder="Batch Size" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="t_status" class="form-control" placeholder="Status" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="t_room" class="form-control" placeholder="Enter Meeting Room" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="t_nomination" class="form-control"  placeholder="User Nominational per PL" value="" required />
                                </div>
                                <!--<div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                <div class="custom-file ">
                                    <input name="uploaded" id="file-upload" type="file" class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01" accept=".ics">
                                    <label class="custom-file-label" for="inputGroupFile01">.ics file</label>
                                </div>
                                </div>-->
                                <div class="form-group">
                                    <input type="file" name="uploaded" class="file" accept=".ics">
                                    <div class="input-group col-xs-12">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                                        <input type="text"  class="form-control input-lg"  placeholder="Upload Image" >
                                        <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                <input type="submit" name="txtbutton" class="btnRegister"  value="ADD"/>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
