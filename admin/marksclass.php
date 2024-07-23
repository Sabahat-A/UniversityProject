<?php 

	include_once"header.php";

	$sid=$_POST['id'];
	$cid=$_POST['cid'];

 ?>

 	<div class="container">
 		<div class="row ">
 			<div class="col-md-12">
 				<form action="action/marks_do.php" method="POST" class="p-5">
 					<div class="row">
 						<div class="col-md-6 p-3">
			 				<div class="form-group">
				 				<label class="font-weight-bolder">Select Subject</label>
				 				<select class="form-control" name="id">
				 					<?php

							    		$sql="SELECT * FROM lecture WHERE st_id ='$sid' AND c_id='$cid'";
										$que=mysqli_query($con,$sql);

									
										$i=1;
										while ($record=mysqli_fetch_array($que)) 
										{
											$id=$record['l_id'];
											$name=$record['l_name'];
									 ?>
				 					<option value="<?=$id?>"><?=$name?></option>
				 					<?php 

										$i++;
										}
									 ?>
				 				</select>
			 				</div>
			 				<div class="form-group">
			 					<label class="font-weight-bolder">Enter Marks :</label>
			 					<input class="form-control" type="text" name="marks">
			 					<input type="hidden" name="sid" value="<?=$sid?>">
			 					<input type="hidden" name="cid" value="<?=$cid?>">
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