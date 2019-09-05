<?php
include('include/header.php');
$id=$_REQUEST['id'];
$query ="SELECT * from training_detail WHERE t_id = $id ";
$result = $conn->query($query);
$row = mysqli_fetch_assoc($result);

?>
	<link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' 
rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <script type="text/javascript" src="node_modules\bootstrap\js\dist\date.js"></script>
  
	<!-- Main Style Css -->
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\style1.css"/>
   

  <div class="page-content">  
    <div class="form-v10-content">
      <form class="form-detail" action="process\process_add_nomination.php" method="post" id="myform">
        <div class=" form-right">
          <h2>General Infomation</h2>
            <div class="form-row">
              <input type="text" name="title" id="title" class="input-text" value="<?php echo $row['t_name']; ?>" required>
            </div>
            <div class="form-row">
              <input type="text" name="unit" id="unit" class="input-text" value="<?php echo $row['t_size']; ?> " required >
            </div>
            <div class="form-group">
              <div class="form-row form-row-1">
              <input type="text" name="e_id" id="e_id" class="input-text" placeholder="Enter Employee ID" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'Enter Employee ID'" required>
              </div>
              <div class="form-row form-row-2">
              <input type="text" name="e_name" id="e_name" class="input-text" placeholder="Enter Employee Name" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'Enter Employee Name'" required>
              </div>
            </div>
            <div class="form-row">
              <input type="email" name="e_email" id="e_email" class="input-text" placeholder="Enter Employee's Email Address" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'Email Address'" required>
            </div>
            <div class="form-row">
              <input type="text" name="e_manager" id="e_manager" class="input-text" placeholder="Manager Name" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'Manager Name'" required>
            </div>
            <div class="form-group">
              <div class="form-row form-row-1">
                <input type="text" name="status" id="status" class="input-text" value="<?php echo $row['t_status']; ?> " onfocus="this.placeholder = ''"
onblur="this.placeholder = 'Status'" required>
              </div>
              <div class="form-row form-row-2">
                <input type="text" name="job_grade" id="job_grade" class="input-text" placeholder="Job Grade" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'Job Grade'" required>
              </div>
              <div class="form-row form-row-3" id='datepicker'>
              <input type="text" name="date" id="date"  value="<?php echo $row['t_date']; ?> "  required >
              <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
            </div>
            
            
					<div class="form-row-last" style="text-align:center;">
						<input id="submit" type="submit" name="register" class="register" value="Submit"  >
					</div>
</div>

</form>

</div>
</div>
