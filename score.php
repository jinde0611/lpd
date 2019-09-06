<?php
include('include/header.php');
$id=$_REQUEST['id'];
$id1=$_REQUEST['id1'];
$query ="SELECT * from nominations WHERE title = '$id' AND date = '$id1'";
$result = $conn->query($query);
?>
<link type="text/css" href="node_modules\bootstrap\dist\css\attendance.css" rel="stylesheet">
<style>
    @import "compass/css3";
  @import 'https://fonts.googleapis.com/css?family=Montserrat:300,400,700';
  .rwd-table {
    margin: 1em 0;
    min-width: 300px;
  }
  .rwd-table tr {
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
  }
  .rwd-table th {
    display: none;
  }
  .rwd-table td {
    display: block;
  }
  .rwd-table td:first-child {
    padding-top: 0.5em;
  }
  .rwd-table td:last-child {
    padding-bottom: 0.5em;
  }
  .rwd-table td:before {
    content: attr(data-th) ": ";
    font-weight: bold;
    width: 6.5em;
    display: inline-block;
  }
  @media (min-width: 480px) {
    .rwd-table td:before {
      display: none;
    }
  }
  .rwd-table th, .rwd-table td {
    text-align: left;
  }
  @media (min-width: 480px) {
    .rwd-table th, .rwd-table td {
      display: table-cell;
      padding: 0.25em 0.5em;
    }
    .rwd-table th:first-child, .rwd-table td:first-child {
      padding-left: 0;
    }
    .rwd-table th:last-child, .rwd-table td:last-child {
      padding-right: 0;
    }
  }

  h1 {
    font-weight: normal;
    letter-spacing: -1px;
    color: #34495e;
    font-size:35px;
  }
  .rwd-table {
    background: #34495e;
    color: #fff;
    border-radius: 0.4em;
    overflow: hidden;
  }
  .rwd-table tr {
    border-color: #46637f;
  }
  .rwd-table th, .rwd-table td {
    margin: 0.5em 1em;
  }
  @media (min-width: 480px) {
    .rwd-table th, .rwd-table td {
      padding: 1em !important;
    }
  }
  .rwd-table th, .rwd-table td:before {
    color: #dd5;
  }
  #transparent {
  background-color: rgba(0,0,0,0.1);
  color: white;
  border: none;

  }
</style>
<?php
$i=0;
while($row = mysqli_fetch_assoc($result))
  {
      $arrayVals[] = $row;
  }
?>
<div class="container" style="padding-top:50px;">
    <h1>Add Assessment Score for <?php echo $id;?></h1><h1> (<?php echo $id1; ?>)</h1>
    <form action="process/process_add_score.php?id=<?php echo $id?>&id1=<?php echo $id1;?>" method="post">
    <table class="rwd-table">
    <tr>
        <th>NO</th>
        <th>Employee ID</th>
        <th>Employee Email</th>
        <th>Pre Assessment</th>
        <th>Post Assessment</th>
        <th>Total Score</th>
    </tr>
    <?php
                foreach ($arrayVals as $row) {
                        $i++;
                   ?>
    <tr>
        <td ><input name="no<?= $i; ?>" id="transparent" type="text" value="<?= $i; ?>" size="5"></td>
        <td ><input name="e_id<?= $i; ?>" id="transparent" type="text" value="<?=  $row["e_id"]; ?>" size="15"></td>
        <td ><input name="email<?= $i; ?>" id="transparent" type="text" value="<?=  $row["e_email"]; ?>" size="50"></td>
        <td ><input name="pre<?= $i; ?>" type="text" size="10"></td>
        <td ><input name="post<?= $i; ?>" type="text" size="10"></td> 
        <td ><input name="total<?= $i; ?>" type="text" size="10"></td>
        <?php } ?>  
    </tr>
    </table>
    <div style="text-align:center;">
    <button type="submit" class="button1">Submit</button>
    </div>
    </form>
</div>
<?php
include('include/footer.php');
?>