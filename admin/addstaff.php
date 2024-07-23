<?php 

	include_once"header.php";

 ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7">
				<form action="action/addstaff_do.php" method="POST" class="p-5">
					<div class="form-group">
						<label class="font-weight-bolder">Name :</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label class="font-weight-bolder">Address :</label>
						<input type="text" name="address" class="form-control">
					</div>
					<div class="form-group">
						<label class="font-weight-bolder">Degree :</label>
						<input type="text" name="degree" class="form-control">
					</div>
					<div class="form-group">
						<label class="font-weight-bolder">Salary :</label>
						<input type="text" name="salary" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit"  class="btn btn-lg" style="background-color: #007C7F; color: #FFFFFF;">
					</div>
				</form>
			</div>
		</div>
	</div>


 <?php 

 	include_once"footer.php";

  ?>