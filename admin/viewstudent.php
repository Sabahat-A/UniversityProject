<?php 

	include_once"header.php";
	$cid=$_POST['id'];

 ?>
 	<div class="container p-5">
 		<div class="row">
 			<div class="col-md-12">
 				<h3 class="text-center" style="color: #007C7F;">Student</h3>
			 	<table id="myTable" class="hover">
				    <thead>
				        <tr>
				            <th>Student Name</th>
				            <th>Class Name</th>
				            <th>Father Name</th>
				            <th>Address</th>
				            <th>Total Fee</th>
				            <th>Submit Fee</th>
				            <th>Remaining Fee</th>
				            <th>Action</th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php

				    		$sql="SELECT * FROM class WHERE c_id ='$cid'";
							$que=mysqli_query($con,$sql);

						
						$i=1;
						while ($record=mysqli_fetch_array($que)) 
						{
							//$id=$record['c_id'];
							$name=$record['c_name'];

							$sql_s="SELECT * FROM student WHERE c_id='$cid'";
							$que_s=mysqli_query($con,$sql_s);

							$a=1;
							while ($new=mysqli_fetch_array($que_s)) 
							{
								$sid=$new['st_id'];
								$names=$new['st_name'];
								$fname=$new['st_fname'];
								$address=$new['st_address'];
								$tfee=$new['st_fee'];
								$sfee=$new['st_sfee'];
								$rfee=$new['st_rfee'];
						 ?>
					<tr>
						<td><?php echo $names; ?></td>
						<td><?php echo $name; ?></td>
						<td><?php echo $fname; ?></td>
						<td><?php echo $address; ?></td>
						<td><?php echo $tfee; ?></td>
						<td><?php echo $sfee; ?></td>
						<td><?php echo $rfee; ?></td>
						<td>
							<div class="m-1">
								<a class="p-1" style="background-color: #007C7F; color: #FFFFFF;" href="action/deletestudent.php?sid=<?php echo $sid;?>">Delete</a>
								<a class="p-1" style="background-color: #007C7F; color: #FFFFFF;" href="updatestudent.php?sid=<?php echo $sid;?>">Update</a>
							</div>
						</td>
					</tr>
					<?php

							$a++; 
							}
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