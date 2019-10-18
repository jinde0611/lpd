<?php

include("../include/connect.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$id = 0;

$query1 = "SELECT u_id FROM users ";
$result1 = $conn->query($query1);
while($row = mysqli_fetch_assoc($result1))
	{
        $id = $row["u_id"];
  }
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password1'];
$encrypted_password = md5($password);

$sql = "INSERT INTO users  VALUES (($id+1),'$name','$username','$email','$encrypted_password')";


if (mysqli_query($conn, $sql)) {
  header("Refresh:0,URL=../index.php");
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>