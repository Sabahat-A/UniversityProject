<?php 

	include_once"header.php";

	$id=$_GET['sid'];

	$sql="SELECT * FROM staff WHERE s_id='$id'";
	$que=mysqli_query($con,$sql);

	$new=mysqli_fetch_array($que);

	$name=$new['s_name'];
	$address=$new['s_address'];
	$degree=$new['s_degree'];
	$salary=$new['s_salary'];

 ?>
 	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form class="p-5" action="action/updatestaff_do.php" method="POST">
					<div class="form-group">
						<label class="font-weight-bolder">Name :</label>
						<input class="form-control" type="text" name="name" value="<?=$name?>" style="width: 80%!important;">
					</div>
					<div class="form-group">
						<label class="font-weight-bolder">Address :</label>
						<input class="form-control" type="text" name="address" value="<?=$address?>" style="width: 80%!important;">
					</div>
					<div class="form-group">
						<label class="font-weight-bolder">Degree :</label>
						<input class="form-control" type="text" name="degree" value="<?=$degree?>" style="width: 80%!important;">
					</div>
					<div class="form-group">
						<label class="font-weight-bolder">Salary :</label>
						<input class="form-control" type="text" name="salary" value="<?=$salary?>" style="width: 80%!important;">
					</div>
					<div class="form-group">
						<input type="hidden" name="sid" value="<?=$id?>">
					</div>
					<div class="form-group">
						<input class="btn btn-lg btn-login text-uppercase fw-bold mb-2" style="background-color: #007C7F; color: #FFFFFF;" type="submit">
					</div>
				</form>
			</div>
		</div>
	</div>


 <?php 

 	include_once"footer.php";

  ?>