<?php
include("../include/connect.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();

$uname1 = $_SESSION['name'];

$query = "SELECT * FROM nominations WHERE e_manager = '$uname1' ";

$result = $conn->query($query) or die(mysqli_error($conn));

if($row = mysqli_fetch_assoc($result))
{

header("location:../nominations.php");
}
else{
	header("location:../training_detail.php");
}