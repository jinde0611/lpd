<?php
include('include/header.php');
?>
<link type="text/css" href="node_modules\bootstrap\dist\css\style.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>

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
            <div class="table-title align-items-center">
                <div class="row">
                    <div class="col-sm-4">
						<h4>Training Details</h4>
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
                        
                    <button type="button" class="btn btn-primary" id="button-excel"><i class="fa fa-download"></i></button>
                    <div class="filter-group align-items-baseline">
							<span><h3>Export</h3></span>
						</div>
                        
                    </div>
                    <div class="col-sm-6">
						<button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
						<div class="filter-group">
							<label>Name</label>
							<input type="text" id="myInput" onkeyup="myFunction()" class="form-control">
						</div>
                    </div>
                </div>
            </div>
           
            <div id="simpleTable1">
            <table  class="pl-2 table table-striped table-hover" style="text-align:center;">
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
                <tbody id="myTable">
                <?php
      if ($count >0)
      {
        foreach ($arrayVals as $row) {
                $i++;
                
                $query1 ="SELECT * from training_detail WHERE t_id = '$row[f_id]' ";
                
                $result1 = $conn->query($query1);
                
                $row1 = mysqli_fetch_assoc($result1);
                
                
                
            ?>
                   
                    <tr >
                        <td><?= $i; ?></td>
                        <td><?=  $row["e_name"]; ?></td>
						<td><?=  $row["e_id"]; ?></td>
                        <td><?=  $row1["t_name"]; ?></td> 
                        <td><?=  $row1["t_date"]; ?></td>
                        <td><?=  $row1["t_room"]; ?></td>
						<td><?=  $row1["t_status"]; ?></td>
                        <td><?=  $row["timestamp"]; ?></td>  
                        <td><?=  $row["e_manager"]; ?></td>
                        <td><?=  $row["attendance"]; ?></td>
						<td><?=  $row["total"]; ?></td>
                        <td><?=  $row["pre_score"]; ?></td>  
                        <td><?=  $row["post_score"]; ?></td>
                        <td>Yes</td>
                        <?php } }?>
                        </tr>
                        <?php 
            $i = 0;?>
                    
                </tbody>
            </table>
            </div>
            
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
       let button = document.querySelector("#button-excel");
        button.addEventListener("click", e => 
        {
            let table = document.querySelector("#simpleTable1");
            TableToExcel.convert(table);
        });
    </script> 
    
    <script>
        function myFunction() 
        {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) 
            {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) 
                {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) 
                    {
                        tr[i].style.display = "";
                    } 
                    else 
                    {
                        tr[i].style.display = "none";
                    }
                }       
            }
        }

        
    </script>
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<?php
include('include/footer.php');
?>                                		                            