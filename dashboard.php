<?php
include('include/header.php');
?>
<link type="text/css" href="node_modules\bootstrap\dist\css\style.css" rel="stylesheet">
<script src="https://rawgit.com/unconditional/jquery-table2excel/master/src/jquery.table2excel.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>

<?php
$query ="SELECT * from nominations ";
$result = $conn->query($query);
$i=0;
while($row = mysqli_fetch_assoc($result))
  {
      $arrayVals[] = $row;
  }
  $count = mysqli_num_rows($result);
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
                    <div class="col-sm-3 align-item-center">
                        
                    <button type="button" class="btn btn-primary" id="export-btn"><i class="fa fa-download"></i></button>
                    <div class="filter-group align-items-baseline">
							<span><h3>Export</h3></span>
						</div>
                        
                    </div>
                    <div class="col-sm-6">
						<button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
						<div class="filter-group">
							<label>Name</label>
							<input type="text" class="form-control">
						</div>
                    </div>
                </div>
            </div>
           
            <div id="resultsTable">
            <table class="pl-2 table table-striped table-hover" style="text-align:center;">
                <thead >
                    <tr class="noEx1">
                        <th>No</th>
                        <th>Name</th>
                        <th>Emp ID</th>
                        <th>Training Name</th>
						<th>Training Date</th>					
                        <th>Location</th>
                        <th>Status</th>
                        <th>Nominated on</th>
                        <th>Nominated By</th>
                        <th>Attendance</th>
                        <th>Total Score</th>
                        <th>Pre Score</th>
                        <th>Post Score</th>
                        <th>Attendance Sheet attached</th>
          
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
                        <td><?= $i; ?></td>
                        <td><?=  $row["e_name"]; ?></td>
						<td><?=  $row["e_id"]; ?></td>
                        <td><?=  $row["title"]; ?></td> 
                        <td><?=  $row["date"]; ?></td>
                        <td></td>
						<td><?=  $row["status"]; ?></td>
                        <td></td>  
                        <td><?=  $row["e_manager"]; ?></td>
                        <td><?=  $row["status"]; ?></td>
						<td><?=  $row["status"]; ?></td>
                        <td><?=  $row["status"]; ?></td>  
                        <td><?=  $row["status"]; ?></td>
                        <td><?=  $row["status"]; ?></td>
                        <?php } }?>
                        </tr>
                        <?php 
            $i = 0;?>
                    
                </tbody>
            </table>
            </div>
            <a href="excel.php" type="submit" name="txtbutton" class="btnRegister">Excel</a>
			<div class="clearfix">
                <div class="hint-text">Showing  out of <b>25</b> entries</div>
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
    <script src="table2excel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
    
    $('#export-btn').on('click', function(e){
        e.preventDefault();
        ResultsToTable();
    });
    
    function ResultsToTable(){    
        $("#resultsTable").table2excel({
            exclude: ".noExl",
            name: "Results"
        });
    }
});
    </script>   

    <?php
    
include('include/footer.php');
?>                                		                            