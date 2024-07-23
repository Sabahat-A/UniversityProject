<?php 

	include_once"header.php";

 ?>

 	<div class="container">
 		<div class="row ">
 			<div class="col-md-12">
 				<form action="marksclass.php" method="POST" class="p-5">
 					<div class="row">
 						<div class="col-md-6 p-3">
			 				<div class="form-group">
				 				<label class="font-weight-bolder">Select Student</label>
				 				<select class="form-control" name="id">
				 					<?php

							    		$sql="SELECT * FROM student";
										$que=mysqli_query($con,$sql);

									
										$i=1;
										while ($record=mysqli_fetch_array($que)) 
										{
											$id=$record['st_id'];
											$name=$record['st_name'];
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
				 				<select class="form-control" name="cid">
				 					<?php

							    		$sql="SELECT * FROM class";
										$que=mysqli_query($con,$sql);

									
										$i=1;
										while ($record=mysqli_fetch_array($que)) 
										{
											$cid=$record['c_id'];
											$cname=$record['c_name'];
									 ?>
				 					<option value="<?=$cid?>"><?=$cname?></option>
				 					<?php 

										$i++;
										}
									 ?>
				 				</select>
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