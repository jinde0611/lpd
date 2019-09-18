<?php
include("../include/connect.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$id = 0;

$query1 = "SELECT t_id FROM training_detail";
$result1 = $conn->query($query1);
while($row = mysqli_fetch_assoc($result1))
	{
        $id = $row["t_id"];
  }
  
define('BASE_URL', '../');
$folder = BASE_URL."ICS/";
  
$t_name = $_POST['t_name'];
$t_date = $_POST['t_date'];
$t_size = $_POST['t_size'];
$t_status = $_POST['t_status'];
$t_room = $_POST['t_room'];
$t_nomination = $_POST['t_nomination'];
$x= $_POST['uploaded'];
print_r($x);

$temp = explode(".", $_FILES["uploaded"]["name"]);

$newfilename = round(microtime(true)).'.'. end($temp);

$db_path =$folder.$newfilename;

$listtype = array(
  '.ics'=>'application/ics',
  '.doc'=>'application/msword'
);


if ( is_uploaded_file( $_FILES['uploaded']['tmp_name'] ) )
{
if($key = array_search($_FILES['uploaded']['type'],$listtype))
{
  if (move_uploaded_file($_FILES['uploaded']  ['tmp_name'],$folder.$newfilename))
{
include('../include/connect.php');

$file_path = substr($db_path, 3);
print_r($file_path);
$sql = "INSERT INTO training_detail VALUES (($id+1),'$t_name','$t_date','$t_size','$t_status','$t_room','$t_nomination','$file_path')";
print_r($sql);
if (mysqli_query($conn, $sql)) {
    header("Refresh:0,URL=../training_detail.php");
      //echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
}
}
else
{
echo "File Type Should Be .ics";
}
  
  mysqli_close($conn);

?>