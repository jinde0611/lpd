<?php
include("../include/connect.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$id = 0;
$id1=$_REQUEST['id'];
$id2=$_REQUEST['id1'];
$query1 = "SELECT s_id FROM score";
$result1 = $conn->query($query1);
while($row = mysqli_fetch_assoc($result1))
	{
        $id = $row["s_id"];
  }

  

$query3= "SELECT * from nominations WHERE title = '$id1' AND date = '$id2'";
$result3 = $conn->query($query3);
while($row3 = mysqli_fetch_assoc($result3)){
$e_id = $_POST['e_id'];
print_r($e_id);
$email = $_POST['email1'];
$pre = $_POST['pre1'];
$post = $_POST['post1'];
$total = $_POST['total1'];
}


// $sql = "INSERT INTO training_detail VALUES (($id+1),'$t_name','$t_date','$t_size','$t_status','$t_nomination')";

// if (mysqli_query($conn, $sql)) {
//     //header("Refresh:0,URL=../training_detail.php");
//       //echo "New record created successfully";
//   } else {
//       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }
  
//   mysqli_close($conn);



?>