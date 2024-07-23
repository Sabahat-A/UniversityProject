<?php 

	include_once"header.php";
	$sid=$_POST['id'];
	$cid=$_POST['cid'];

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
				            <th>Subject Name</th>
				            <th>Mark</th>
				            <th>Action</th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php

				    		$sql="SELECT * FROM marks WHERE c_id='$cid' AND st_id='$sid'";
							$que=mysqli_query($con,$sql);

						
						$i=1;
						while ($record=mysqli_fetch_array($que)) 
						{
							$id=$record['m_id'];
							$cid=$record['c_id'];
							$stid=$record['st_id'];
							$lid=$record['l_id'];
							$marks=$record['m_marks'];

							echo $stid;

							$sql_c="SELECT * FROM class WHERE c_id='$cid'";
							$que_c=mysqli_query($con,$sql_c);

						
							$a=1;
							while ($record_c=mysqli_fetch_array($que_c)) 
							{
								$cname=$record_c['c_name'];

								$sql_st="SELECT * FROM student WHERE st_id='$stid'";
								$que_st=mysqli_query($con,$sql_st);

							
								$s=1;
								while ($record_st=mysqli_fetch_array($que_st)) 
								{
									$stname=$record_st['st_name'];
									

									$sql_l="SELECT * FROM lecture WHERE l_id='$lid'";
									$que_l=mysqli_query($con,$sql_l);

								
									$l=1;
									while ($record_l=mysqli_fetch_array($que_l)) 
									{
										$lname=$record_l['l_name'];

							 ?>
					<tr>
						<td><?php echo $stname; ?></td>
						<td><?php echo $cname; ?></td>
						<td><?php echo $lname; ?></td>
 						<td><?php echo $marks; ?></td>
						<td>
							<a class="btn" style="background-color: #007C7F; color: #FFFFFF;" href="action/deletemarks.php?sid=<?php echo $sid;?>">Delete</a>
						</td>
					</tr>
					<?php

									$l++;
									}
								$s++;
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