<?php
include('include/header.php');
?>
<link type="text/css" href="node_modules\bootstrap\dist\css\style.css" rel="stylesheet">

<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>

<?php
$query ="SELECT * from training_detail";
$result = $conn->query($query);


$i=0;
while($row = mysqli_fetch_assoc($result))
  {
      $arrayVals[] = $row;
  }
?>

    <div class="container-fluid">
    
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						<h2>Training Details</h2>
					</div>
                </div>
            </div>
			<div class="table-filter">
				<div class="row">
                    <div class="col-sm-3">
						<div class="show-entries">
							<span>Show</span>
							<select class="form-control">
								<option>5</option>
								<option>10</option>
								<option>15</option>
								<option>20</option>
							</select>
							<span>entries</span>
						</div>
					</div>
                    <div class="col-sm-9">
						<button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
						<div class="filter-group">
							<label>Name</label>
							<input type="text" class="form-control">
						</div>
                    </div>
                </div>
			</div>
            <table class="table table-striped table-hover" style="text-align:center;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Training Name</th>
						<th>Training Date</th>					
                        <th>Add Training Details</th>						
                        
                        
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                foreach ($arrayVals as $row) {
                        $i++;
                   ?>
                   
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?=  $row["t_name"]; ?></td>
						<td><?=  $row["t_date"]; ?></td>
                        <td><a href="score.php?id=<?php echo $row["t_id"];?>"  title="Add Pre Score" data-toggle="tooltip"><i class="material-icons">add_circle_outline</i></a></td>                        
						
                        
                        
                    <?php } ?>
                        </tr>
                    <?php 
                    
                    $i = 0;?>
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Showing <b><?= $row["t_id"]; ?></b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">6</a></li>
					<li class="page-item"><a href="#" class="page-link">7</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div> 
           

    <?php
    
include('include/footer.php');
?>                                		                            