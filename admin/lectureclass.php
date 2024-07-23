<?php 

	include_once"header.php";

 ?>

 	<div class="container p-5">
 		<div class="row">
 			<div class="col-md-6">
 				<form action="viewlecture.php" method="POST">
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
				 		<input type="submit" name="">
				 	</div>
				 </form>
 			</div>
 		</div>
 	</div>


 <?php 

 	include_once"footer.php";

  ?>