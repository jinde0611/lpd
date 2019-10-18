<?php
include('include/header.php');
$id=$_REQUEST['id'];

$query ="SELECT * from nominations WHERE f_id = '$id'";
$query1 ="SELECT * from training_detail WHERE t_id = '$id'";

$result = $conn->query($query);
$result1 = $conn->query($query1);
$row1 = mysqli_fetch_assoc($result1)
?>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
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
<div class="container" >
    <h1>Add Assessment Score for <?php echo $row1["t_name"];?></h1><h1> (<?php echo $row1["t_date"]; ?>)</h1>
    <form action="process\process_add_score.php?id=<?php echo $id ;?>" method="post">
    <table class="rwd-table">
    <tr>
        <th>NO</th>
        <th>Employee ID</th>
        <th>Employee Email</th>
        <th>Pre Assessment</th>
        <th>Post Assessment</th>
        <th>Attendence</th>
    </tr>
    <?php
                foreach ($arrayVals as $row) {
                        $i++;
                   ?>
    <tr>
        <td ><input name="no" id="transparent" type="text" value="" size="5"></td>
        <td ><input name="" id="transparent" type="text" value="<?=  $row["e_id"]; ?>" size="15"></td>
        <td ><input name="email" id="transparent" type="text" value="<?=  $row["e_email"]; ?>" size="50"></td>
        <td ><input name="pre_score" type="text" size="10"></td>
        <td ><input name="post_score" type="text" size="10"></td> 
        <td data-th="Year">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn active">
              <input type="radio" name='<?php echo $i; ?>' checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span> Present</span>
            </label>
            <label class="btn">
              <input type="radio" name='<?php echo $i; ?>'> <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span> Absent</span>
            </label>
          </div>
        </td>
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