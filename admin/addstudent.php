<?php 

	include_once"header.php";

 ?>

 	<div class="container">
 		<div class="row ">
 			<div class="col-md-12">
 				<form action="action/addstudent_do.php" method="POST" class="p-5">
 					<div class="row">
 						<div class="col-md-6 p-3">
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
			 					<label class="font-weight-bolder">Student Name :</label>
			 					<input class="form-control" type="text" name="name">
			 				</div>
			 				<div class="form-group">
			 					<label class="font-weight-bolder">Father Name :</label>
			 					<input class="form-control" type="text" name="fname">
			 				</div>
			 				<div class="form-group">
			 					<label class="font-weight-bolder">Address :</label>
			 					<input class="form-control" type="text" name="address">
			 				</div>
			 			</div>
			 			<div class="col-md-6 p-3">
			 				<div class="form-group">
			 					<label class="font-weight-bolder">Total Fee</label>
			 					<input class="form-control" type="text" name="tfee">
			 				</div>
			 				<div class="form-group">
			 					<label class="font-weight-bolder">Submit Fee</label>
			 					<input class="form-control" type="text" name="sfee">
			 				</div>
			 				<div class="form-group">
			 					<label class="font-weight-bolder">Remaining Fee</label>
			 					<input class="form-control" type="text" name="rfee">
			 				</div>
			 				<div class="form-group text-center">
								<input class=" btn btn-login text-uppercase fw-bold mb-2" style="background-color: #007C7F; color: #FFFFFF;" type="submit">
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