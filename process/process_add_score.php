<?php
include("../include/connect.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$i = 0;
$id1=$_REQUEST['id'];
$query = "SELECT * FROM nominations where f_id ='$id1';";
$result = $conn->query($query);
$row1=mysqli_fetch_assoc($result);

$x=$_POST["pre_score"];

    for($i=0;$i<count($_POST['pre_score']);$i++){

    $stmt = $conn->prepare("UPDATE  `nominations` (`pre_score`, `post_score`, `attendance`) VALUES (?,?,?)");
    $stmt->bind_param('sss',$_POST['pre_score'][$i],$_POST['post_score'][$i],$_POST['attendance'][$i]);
    $stmt->execute();
    $row_count = $stmt->affected_rows;

    if($row_count>0){

         echo "data inserted";

     }else{

        echo "data inserted";

      } 

   }


?>