<?php 

	include_once"header.php";
	$lcid=$_POST['id'];

 ?>
 	<div class="container p-5">
 		<div class="row">
 			<div class="col-md-12">
 				<h3 class="text-center" style="color: #007C7F;">Lecture</h3>
			 	<table id="myTable" class="hover">
				    <thead>
				        <tr>
				            <th>Professor Name</th>
				            <th>Lecture</th>
				            <th>Class</th>
				            <th>Student Name</th>
				            <th>Lecture Timing</th>
				            <th>Action</th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php

				    		$sql="SELECT * FROM lecture WHERE c_id='$lcid'";
							$que=mysqli_query($con,$sql);

						
						$i=1;
						while ( $record=mysqli_fetch_array($que) ) 
						{
							$id=$record['l_id'];
							$sid=$record['s_id'];
							$cid=$record['c_id'];
							$stid=$record['st_id'];
							$name=$record['l_name'];
							$timing=$record['l_timing'];

							$sql_s="SELECT * FROM staff WHERE s_id='$sid'";
							$que_s=mysqli_query($con,$sql_s);

							$a=1;
							while ($new=mysqli_fetch_array($que_s)) 
							{
								
								$names=$new['s_name'];

								$sql_s="SELECT * FROM class WHERE c_id='$cid'";
								$que_s=mysqli_query($con,$sql_s);

								$c=1;
								while ($new=mysqli_fetch_array($que_s)) 
								{
									
									$cname=$new['c_name'];

									$sql_st="SELECT * FROM student WHERE st_id='$stid'";
									$que_st=mysqli_query($con,$sql_st);

									$st=1;
									while ($stnew=mysqli_fetch_array($que_st)) 
									{
										
										$stname=$stnew['st_name'];
								
						 ?>
					<tr>
						<td><?php echo $names; ?></td>
						<td><?php echo $name; ?></td>
						<td><?php echo $cname; ?></td>
						<td><?php echo $stname; ?></td>
						<td><?php echo $timing; ?></td>
						<td>
							<a class="btn" style="background-color: #007C7F; color: #FFFFFF;" href="action/deletelecture.php?lid=<?php echo $id;?>">Delete</a>
						</td>
					</tr>
					<?php

									$st++;
									}
								$c++;
								}
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