<?php
include("../include/connect.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$i = 0;
$j = 0;
$id1=$_REQUEST['id'];
$query = "SELECT * FROM nominations where f_id ='$id1';";
$result = $conn->query($query);

while($row = mysqli_fetch_assoc($result))
	{
    $arrayVals[] = $row;
  }

foreach ($arrayVals as $row) {
     $i++;
     $j++;
    $x=$_POST["$i"];
    $y=$_POST["$j"];
    echo $x;
    echo $y;
   
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