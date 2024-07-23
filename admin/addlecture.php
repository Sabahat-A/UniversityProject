<?php 

	include_once"header.php";

 ?>

<div class="container">
 		<div class="row ">
 			<div class="col-md-12">
 				<form action="action/addlecture_do.php" method="POST" class="p-5">
 					<div class="row">
 						<div class="col-md-6 p-3">
 							<div class="form-group">
				 				<label class="font-weight-bolder">Select Class</label>
				 				<select class="form-control" name="sid">
				 					<?php

							    		$sql="SELECT * FROM staff";
										$que=mysqli_query($con,$sql);

									
										$i=1;
										while ($record=mysqli_fetch_array($que)) 
										{
											$sid=$record['s_id'];
											$names=$record['s_name'];
									 ?>
				 					<option value="<?=$sid?>"><?=$names?></option>
				 					<?php 

										$i++;
										}
									 ?>
				 				</select>
			 				</div>
			 				<div class="form-group">
				 				<label class="font-weight-bolder">Select Class</label>
				 				<select class="form-control" name="id">
				 					<?php

							    		$sql="SELECT * FROM class";
										$que=mysqli_query($con,$sql);

									
										$i=1;
										while ($record=mysqli_fetch_array($que)) 
										{
											$id=$record['c_id'];
											$name=$record['c_name'];
									 ?>
				 					<option value="<?=$id?>"><?=$name?></option>
				 					<?php 

										$i++;
										}
									 ?>
				 				</select>
			 				</div>
			 				<div class="form-group">
				 				<label class="font-weight-bolder">Select Class</label>
				 				<select class="form-control" name="stid">
				 					<?php

							    		$sql="SELECT * FROM student";
										$que=mysqli_query($con,$sql);

									
										$i=1;
										while ($record=mysqli_fetch_array($que)) 
										{
											$stid=$record['st_id'];
											$namest=$record['st_name'];
									 ?>
				 					<option value="<?=$stid?>"><?=$namest?></option>
				 					<?php 

										$i++;
										}
									 ?>
				 				</select>
			 				</div>
			 				<div class="form-group">
			 					<label class="font-weight-bolder">Lecture Name :</label>
			 					<input class="form-control" type="text" name="lname">
			 				</div>
			 				<div class="form-group">
			 					<label class="font-weight-bolder">Timing :</label>
			 					<input class="form-control" type="text" name="timing">
			 				</div>
			 				<div class="form-group">
								<input class="btn btn-lg btn-login text-uppercase fw-bold mb-2" style="background-color: #007C7F; color: #FFFFFF;" type="submit">
							</div>
			 			</div>
			 		</div>
 				</form>
 			</div>
 		</div>
 	</div>

 <?php 

 	include_once"footer.php";

  ?>