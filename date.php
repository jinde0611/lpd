<?php
include("include/connect.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$id=$_REQUEST['id'];
$query = "SELECT date FROM nominations WHERE n_id = '$id' ";
$result = $conn->query($query);
$row = mysqli_fetch_assoc($result);
$training_date=$row['date'];
$date_object = date_create($training_date);
$reminder_date = date_modify($date_object,'-7 day');
$current_date = date('Y-m-d');
$reminder_date1= date_format($reminder_date,'Y-m-d');

if ($current_date < $reminder_date1) {
header("Refresh:0,URL=nomination_edit.php?id=$id");
}
else{
    header("Refresh:0,URL=nominations.php");
    alert("You Cannot Edit This Nominations");
}

mysqli_close($conn);
?>