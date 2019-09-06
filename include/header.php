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
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' 
rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" href="node_modules\bootstrap\dist\css\bootstrap.css" rel="stylesheet">
    <link type="text/css" href="node_modules\bootstrap\dist\css\bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="node_modules\bootstrap\dist\css\bootstrap-grid.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link type="text/css" href="node_modules\bootstrap\dist\css\bootstrap-reboot.css" rel="stylesheet">
    <script type="text/javascript" src="node_modules\bootstrap\dist\js\bootstrap.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
      
  </head>
  <style>
  .nav-link{
  color:white; 
  font-size: 14px; 
  font-weight: 400;
  font-family: montserrat;
  }
  </style>
 <body>   
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="training.php">Add Training</a>
      </li>  
    </ul>
    
  </div>
  <?php 
        
        if (isset($_SESSION['username']))
        
        {?>
        <a  class="nav-link"  href="process/process_nominations.php">Nominations</a>
    <a  class="nav-link"  href="process/process_nominations.php"><?php echo $_SESSION['name'];?></a>
  <form class="form-inline my-2 my-lg-0" action="logout.php">   
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Logout</button>
    </form>
    
    <?php }
?>
   
</nav>