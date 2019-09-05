<?php
include('include/header.php');
$id=$_REQUEST['id'];
$id1=$_REQUEST['id1'];
$query ="SELECT * from nominations WHERE title = '$id' AND date = '$id1'";
$result = $conn->query($query);
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<style>

  .button1 {
    background: #76B3FA;
    border-radius: 90px;
    padding: 20px 40px;
    color:white;
    text-decoration: none;
    font-size: 1.45em;
    margin: 0 15px;
  }

  /* Hover state animation applied here */
  .button1:hover { 
    -webkit-animation: hover 1200ms linear 2 alternate;
    animation: hover 1200ms linear 2 alternate;
  }

  /* Active state animation applied here */
  .button1:active {
    -webkit-animation: active 1200ms ease 1 alternate;
    animation: active 1200ms ease 1 alternate; 
    background: #5F9BE0;
  }
  </style>
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

    h3 {
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

  </style>
  <style>

    label.btn span {
      font-size: 1.5em ;
    }

    label input[type="radio"] ~ i.fa.fa-circle-o{
        color: #c8c8c8;    display: inline;
    }
    label input[type="radio"] ~ i.fa.fa-dot-circle-o{
        display: none;
    }
    label input[type="radio"]:checked ~ i.fa.fa-circle-o{
        display: none;
    }
    label input[type="radio"]:checked ~ i.fa.fa-dot-circle-o{
        color: #7AA3CC;    display: inline;
    }
    label:hover input[type="radio"] ~ i.fa {
    color: #7AA3CC;
    }



    div[data-toggle="buttons"] label.active{
        color: #7AA3CC;
    }

    div[data-toggle="buttons"] label {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 2em;
    text-align: left;
    white-space: nowrap;
    vertical-align: top;
    cursor: pointer;
    background-color: none;
    border: 0px solid 
    #c8c8c8;
    border-radius: 3px;
    color: #c8c8c8;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
    }

    div[data-toggle="buttons"] label:hover {
    color: #7AA3CC;
    }

    div[data-toggle="buttons"] label:active, div[data-toggle="buttons"] label.active {
    -webkit-box-shadow: none;
    box-shadow: none;
    }

</style>
<?php
$i=0;
while($row = mysqli_fetch_assoc($result))
  {
      $arrayVals[] = $row;
  }
?>
<div class="container" style="padding-top:45px; text-align:center;">
    <h3>Pre Assessment Score for <?php echo $id;?> (<?php echo $id1; ?>)</h3>
    <form action="process/process_add_attendance.php" method="post">
    <table class="rwd-table" style="text-align:center; margin-left:auto; margin-right:auto;" >
    <tr>
        <th>NO</th>
        <th>Employee Name</th>
        <th>Email ID </th>
        <th>Attendence</th>
    </tr>
    <?php
        foreach ($arrayVals as $row) {
                $i++;
    ?>
    <tr>
        <td data-th="Movie Title"><?= $i; ?></td>
        <td data-th="Genre"><?=  $row["e_name"]; ?></td>
        <td data-th="Genre"><?=  $row["e_email"]; ?></td>
        <td data-th="Year">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn active">
              <input type="radio" name='<?php echo $i;?>' checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span> Present</span>
            </label>
            <label class="btn">
              <input type="radio" name='<?php echo $i;?>'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span> Absent</span>
            </label>
          </div>
        </td>
    </tr>
    <?php } ?>
    </table>
    <div style="text-align:center;">
    <button type="submit" class="button1">Recommend</button>
    </div>
    </form>
</div>
