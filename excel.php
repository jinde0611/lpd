<?php
include('include/connect.php');

$query ="SELECT * from nominations ";
$result = $conn->query($query);

while($row = mysqli_fetch_assoc($result))
  {
      $arrayVals[] = $row;
  }
   
 echo $row['e_id'];
  //give a filename
  $filename = "myexcel.csv";
  //set headers to download file
  header( 'Content-Type: text/csv' );
  header( 'Content-Disposition: attachment;filename='.$filename);
  $file = fopen('php://output', 'w');            
  //set the column names
  $cells[] = array('No','Name','Emp ID','Training Name','Training Date','Location','Status','Nominated on','Nominated By','	Attendance','Total Score','Pre Score','	Post Score','Attendance Sheet attached',);
  //pass all the form values
  $cells[] = array($row["e_name"], $row["e_id"], $row["date"]);
  foreach($cells as $cell){
    fputcsv($file,$cell);
  }
  fclose($file); 
  ?> 
