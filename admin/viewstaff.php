<?php 

	include_once"header.php";

 ?>
 	<div class="container p-5">
 		<div class="row">
 			<div class="col-md-12">
 				<h3 class="text-center" style="color: #007C7F;">Staff</h3>
			 	<table id="myTable" class="hover">
				    <thead>
				        <tr>
				            <th>SR No</th>
				            <th>Name</th>
				            <th>Address</th>
				            <th>Degree</th>
				            <th>Salary</th>
				            <th>Action</th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php

				    		$sql="SELECT * FROM staff";
							$que=mysqli_query($con,$sql);

						
						$i=1;
						while ($record=mysqli_fetch_array($que)) 
						{
							$id=$record['s_id'];
							$name=$record['s_name'];
							$address=$record['s_address'];
							$degree=$record['s_degree'];
							$salary=$record['s_salary'];
						 ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $name; ?></td>
						<td><?php echo $address; ?></td>
						<td><?php echo $degree; ?></td>
						<td><?php echo $salary; ?></td>
						<td>
							<div class="m-1">
								<a class="btn-lg m-1" style="background-color:#007C7F; color: #FFFFFF;" href="action/deletestaff.php?sid=<?php echo $id;?>">Delete</a>
								<a class="btn-lg m-1" style="background-color:#007C7F; color: #FFFFFF;" href="updatestaff.php?sid=<?php echo $id;?>">Update</a>
							</div>
						</td>
					</tr>
					<?php 

						$i++;
						}
					 ?>
				    </tbody>
				</table>
    		</div>
    	</div>
    </div>


 <?php 

 	include_once"footer.php";

  ?>