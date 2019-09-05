<?php
include('include/header.php');
$id=$_REQUEST['id'];
$id1=$_REQUEST['id1'];
$query ="SELECT * from nominations WHERE title = '$id' AND date = '$id1'";
$result = $conn->query($query);
?>
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
label {
    position: relative;
    display: inline-block;
    text-align: center;
}

.btn:hover {
    cursor: pointer !important;
}

.btn:active {
    box-shadow: 0 1px #666 !important;
    transform: translateY(2px) !important;
}
.btn {
    
    font-size: 15px;
    font-weight: bold;
    height: 35px;
    width: 100px;
    box-shadow: 0 3px #999;
    text-align: center;
}
.btn-sık {
    transition: all 0.2s ease;
    background-color: white ;
    border: 2px solid #f44336 !important;
    box-shadow: 0 3px #d32f2f !important;
    min-width: 150px;
    border-radius: 20px;
}


    btn-sık::selection{
        background: green;
    }

input[type="radio"] {
     position: absolute;
  visibility: hidden;
}
input[type="radio"] + div {
    position: relative;
}
input[type="radio"]:checked + div {
  background-color: #ef5350;
}

input[type="radio"] + div>span {
position: relative;
}




</style>
<style>
td{
  text-align: center;
}
</style>
<?php
$i=0;
while($row = mysqli_fetch_assoc($result))
  {
      $arrayVals[] = $row;
  }
?>

<div class="container" style="padding-top:25px;">
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
    <center>Attendance Sheet for <?php echo $id;?> (<?php echo $id1; ?>)
      <center>
  </h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <table class="w3-table-all w3-card-4 table table-bordered table-responsive-md table-striped text-center ">
        <thead>
          <tr>
          <th class="text-center w3-theme-d1">No</th>
            <th class="text-center w3-theme-d1">Employee Name</th>
            <th class="text-center w3-theme-d1">Training Name</th>
            <th class="text-center w3-theme-d1">Absent </th>
          </tr>
        </thead>
        
        <tbody >
        <?php
                foreach ($arrayVals as $row) {
                        $i++;
                   ?>
          <tr>
          
            <td><?php echo $row["n_id"]; ?></td>
            <td><?php echo $row["e_email"]; ?></td>
            <td><?php echo $row["title"]; ?></td>        
            <td>
    <label>
        <input type="radio" name="<?php echo $i;?>"> 
         <div  class="btn btn-sık"><span>Present</span></div> </label>
     <label >
        <input  type="radio"  name="<?php echo $i;?>"> 
       <div class="btn btn-sık"><span>Absent</span></div></label>
            </td>
          </tr>
          <?php } ?>
        </tbody>
        
      </table>
    </div>
  </div>
</div>
</div>
<?php
include('include/footer.php');
?>