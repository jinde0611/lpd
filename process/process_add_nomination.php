<?php
include("../include/connect.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = 0;

$query = "SELECT n_id FROM nominations ";
$result = $conn->query($query);
while($row = mysqli_fetch_assoc($result))
	{
        $id = $row["n_id"];
  }

$title = $_POST['title'];
$unit = $_POST['unit'];
$e_id = $_POST['e_id'];
$e_name = $_POST['e_name'];
$e_email = $_POST['e_email'];
$e_manager = $_POST['e_manager'];
$status = $_POST['status'];
$job_grade = $_POST['job_grade'];
$date = $_POST['date'];


$sql = "INSERT INTO nominations VALUES (($id+1),'$title','$unit','$e_id','$e_name','$e_email','$e_manager','$status','$job_grade','$date')";
$check ="SELECT * from nominations WHERE e_manager='$e_manager' AND title='$title'";
$result1 = mysqli_query($conn, $check);
$row1 = mysqli_num_rows($result1);

if($row1 < 3)
{
  if (mysqli_query($conn, $sql)) 
  {
    header("Refresh:0,URL=../training_detail.php");
    echo "New record created successfully";
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
else{
  echo 'already added';
}


  
mysqli_close($conn);



?>