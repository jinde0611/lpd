<?php
include('include/header.php');
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="node_modules\bootstrap\dist\css\training.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            
            <input type="submit" name="" value="Check"/><br/>
            </div>
            <div class="col-md-9 register-right">
            <form action="process\process_add_training.php" method="post" >
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Add a Training</h3>
                        <div class="row register-form">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="t_name" class="form-control" placeholder="Training Name" />
                                </div>
                                <div class="form-group">
                                    <input type="date" name="t_date"class="form-control" placeholder="Training Date"  />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="t_size" class="form-control" placeholder="Batch Size"  />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="t_status" class="form-control" placeholder="Status"  />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="t_nomination" class="form-control"  placeholder="User Nominational per PL" value="" />
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
