<?php

include("../include/connect.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$id=$_REQUEST['id'];
$user_name = $_SESSION['username'];
$title = $_POST['title'];
$unit = $_POST['unit'];
$e_id = $_POST['e_id'];
$e_name = $_POST['e_name'];
$e_email = $_POST['e_email'];
$e_manager = $_POST['e_manager'];
$status = $_POST['status'];
$job_grade = $_POST['job_grade'];
$date = $_POST['date'];




$sql = "UPDATE  nominations SET title='".$title."', unit='".$unit."',e_id='".$e_id."',e_name='".$e_name."',e_email='".$e_email."',	e_manager='".$e_manager."', status='".$status."',job_grade='".$job_grade."',date='".$date."' WHERE n_id='".$id."'";

if (mysqli_query($conn, $sql)) {
  $last_id = mysqli_insert_id($conn);
  //$_SESSION['claim_id'] = $last_id;
    header("Refresh:0,URL=../nominations.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>