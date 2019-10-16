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
$pre = $_POST['pre']; 

foreach ($pre as $row_id => $value) {

  //use $key as row id and marks will be your $value. So change your query like this below.
  
  $row_id=$key+1;
  $query = "UPDATE nominations SET pre_score = '$value'
  WHERE  f_id = $id1";
  echo $query;
  $close = mysqli_query($con, $query); 
}

// while($row = mysqli_fetch_assoc($result))
// 	{
//     $arrayVals[] = $row;
//   }

// foreach ($arrayVals as $row) {
//      $i++;
//     $x=$_POST["$i"];
//     echo $x;
    
   
// $sql .= "UPDATE nominations SET pre_score= $x where f_id = $id1";
// if ($conn->multi_query($sql) === TRUE) {
//     //header("Refresh:0,URL=../training_detail.php");
//       //echo "New record created successfully";
//   } else {
//       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }
// }
  // $i=0;
  // mysqli_close($conn);



?>