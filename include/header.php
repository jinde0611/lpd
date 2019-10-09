<?php 
include("connect.php");
if ($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }
  session_start();
 
?>

<html>
  <head>
    <title>HERE LPD</title>
    <script  src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" href="node_modules\bootstrap\dist\css\bootstrap.css" rel="stylesheet">
    <link type="text/css" href="node_modules\bootstrap\dist\css\bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="node_modules\bootstrap\dist\css\bootstrap-grid.css" rel="stylesheet">
    <link rel="stylesheet" href="\LPD\style.css">
    <link type="text/css" href="node_modules\bootstrap\dist\css\bootstrap-reboot.css" rel="stylesheet">
    <script type="text/javascript" src="node_modules\bootstrap\dist\js\bootstrap.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
      
  </head>
  <style>
   .nav-link{
  color:white; 
  font-size: 14px; 
  font-weight: 400;
    }
  </style>
 <body style="font-family:'Fira Sans Condensed';">   
<nav class="navbar navbar-expand-lg  sticky-top " style="background-color:#009688 ">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <?php 
    if (!isset($_SESSION['username']))
        
        {?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
        
      
      <?php }?>
      <?php 
        
        if (isset($_SESSION['username']))
        
        {?>
        <li class="nav-item active">
            <a class="nav-link" href="training_detail.php">Home <span class="sr-only">(current)</span></a>
          </li>
      <li class="nav-item">
        <a class="nav-link" href="training.php">Add Training</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="training_lpd.php">Training Details</a>
      </li> 
    </ul>
    
  </div>
  
        <ul class="navbar-nav">
          
        
          <li class="nav-item ">
            <a  class="nav-link"  href="process/process_nominations.php">Nominations</a>
          </li>
          <li class="nav-item ">
            <a  class="nav-link"  href="process/process_nominations.php"><?php echo $_SESSION['name'];?></a>
          </li>
          <li class="nav-item ">
            <a  class="nav-link"  href="logout.php">Logout</a>
          </li>
        </ul>
     
    <?php }
?>
   
</nav>