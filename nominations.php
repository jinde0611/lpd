<?php
include('include/header.php');
$name=$_SESSION['name'];

?>

<style>
  
    h1{
    font-size: 35px;
    color: black  ;
    text-transform: uppercase;
    font-weight: 300;
    text-align: center;
    margin-bottom: 15px;
  }
  table{
    table-layout: fixed;
    width:100%;
    text-align: center; 
    vertical-align: middle;
     }

    
  .tbl-header{
    background-color: #4835d4;
    border-radius:10px 10px 10px 10px;
  }
  .tbl-content{
    height:500px;
    overflow-x:auto;
    margin-top: 0px;
    border: 1px solid;
    background-color: #4835d4;
    
    ;
  }
  th{
    
    padding: 20px 15px;
    text-align: left;
    font-weight: 500;
    font-size: 20px;
    color: #fff;
    text-transform: uppercase;
  }
  td{
    padding: 15px;
    text-align: left;
    vertical-align:middle;
    font-weight: 350;
    font-size: 18px;
    color: white;
    
  }
  a{
    color:white;
  }
  .heading{
    font-weight: 500;
    font-size: 30px;
    background-color: #4835d4;
    text-align: center;
    border-radius:10px 10px 10px 10px ;
    color:white;
    padding:5px;
  }

  /* demo styles */

  @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
  body{
    
    font-family: 'Roboto', sans-serif;
  }
  section{
    margin: 25px;
    
  }

  /* for custom scrollbar for webkit browser*/

  ::-webkit-scrollbar {
      width: 6px;
  } 
  ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
  } 
  ::-webkit-scrollbar-thumb {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
  }
</style>
<script>
  $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
  }).resize();
</script>
<section>
  <!--for demo wrap-->
  <?php
$query ="SELECT * from nominations WHERE e_manager='$name'";
$result = $conn->query($query);
$i=0;
while($row = mysqli_fetch_assoc($result))
  {
      $arrayVals[] = $row;
  }
  $count = mysqli_num_rows($result);
 ?>
  <div class="heading"><h2>Nominations</h2></div><br>
  <div class="tbl-header" style="text-align;">
  
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th width="5%">No</th>
          <th width="20%">Trainee Name</th>
          <th width="20%">Email</th>
          <th width="25%">Training Name</th>
          <th width="10%">Date</th>
          <th width="10%">Status</th>
          <th width="5%">Edit</th>
        </tr>
      </thead>
    
    
 
    
      <tbody>
      <?php
      if ($count >0)
      {
        foreach ($arrayVals as $row) {
                $i++;
            ?>
        <tr>
          <td width="5%"><?= $i; ?></td>
          <td width="20%"><?=  $row["e_name"]; ?></td>
          <td width="20%"><?=  $row["e_email"]; ?></td>
          <td width="25%"><?=  $row["title"]; ?></td>
          <td width="10%"><?=  $row["date"]; ?></td>
          <td width="10%"><?=  $row["status"]; ?></td>
          <td width="5%"><a href="date.php?id=<?php echo $row["n_id"];?>"><i class="fa fa-pencil-square-o fa-2x" ></a></i></td>
          <?php } }?>
        </tr>
      <?php 
            $i = 0;?>
      </tbody>
    </table>
  </div>
</section>


