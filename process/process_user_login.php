<?php
include("../include/connect.php");
session_start();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['u_name'];
$password = $_POST['u_password'];
$encrypted_password = md5($password);


$query = "SELECT * FROM users WHERE u_email='$username' and u_password='$encrypted_password'";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
while($row = mysqli_fetch_assoc($result)) {
	$name = $row['u_name'];
}

if ($count == 1){
//$_SESSION['username'] = $username;
	$_SESSION['username'] = $username;
	$_SESSION['is_PL'] = 1;
	$_SESSION['name'] = $name;
	header("Refresh:0,url=../training_detail.php");
	//echo "Valid user";
}else{

$fmsg = "Invalid Login Credentials.";
header("location:../index.php");

}

?>


