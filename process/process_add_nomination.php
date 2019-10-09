<?php
include("../include/connect.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id1=$_REQUEST['id'];
$id = 0;
$id2 = 0;
$query1 = "SELECT count FROM training_detail WHERE t_id=$id1 ";
echo $query1;
$result1 = $conn->query($query1);
while($row1 = mysqli_fetch_assoc($result1))
	{
    $id2=$row1["count"];
  }

$query = "SELECT n_id FROM nominations ";
$result = $conn->query($query);
while($row = mysqli_fetch_assoc($result))
	{
        $id = $row["n_id"];
  }


$e_id = $_POST['e_id'];
$e_name = $_POST['e_name'];
$e_email = $_POST['e_email'];
$e_manager = $_POST['e_manager'];
$job_grade = $_POST['job_grade'];
$sql = "INSERT INTO nominations (n_id,t_id,e_id,e_name,e_email,e_manager,job_grade)VALUES (($id+1),'$id1','$e_id','$e_name','$e_email','$e_manager','$job_grade');";
// $sql .="INSERT INTO training_detail (count )SELECT * FROM training_detail WHERE t_id = $id1 (count) VALUES (($id2+1)) ";
// print_r($sql);
// $check ="SELECT * from nominations WHERE e_manager='$e_manager' AND title='$title'";
// $result1 = mysqli_query($conn, $check);
// $row1 = mysqli_num_rows($result1);

// if($row1 < 3)
// {
  if ($conn->multi_query($sql) === TRUE)
  {
    header("Refresh:0,URL=../training_detail.php");
    echo "New record created successfully";
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
// }
// else{
//   echo 'already added';
// }


  
mysqli_close($conn);



?>