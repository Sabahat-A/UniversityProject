<?php 

	include_once"header.php";

	$id=$_GET['sid'];

	$sql="SELECT * FROM student WHERE st_id='$id'";
	$que=mysqli_query($con,$sql);

	$new=mysqli_fetch_array($que);

	$name=$new['st_name'];
	$tfee=$new['st_tfee'];
	$sfee=$new['st_sfee'];
	$rfee=$new['st_rfee'];

 ?>
 	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form class="p-5" action="action/updatestudent_do.php" method="POST">
					<div class="form-group">
						<label class="font-weight-bolder">Name :</label>
						<input class="form-control" type="text" name="name" value="<?=$name?>" style="width: 80%!important;">
					</div>
					<div class="form-group">
						<label class="font-weight-bolder">Total Fee :</label>
						<input class="form-control" type="text" name="tfee" value="<?=$tfee?>" style="width: 80%!important;">
					</div>
					<div class="form-group">
						<label class="font-weight-bolder">Remaining Fee :</label>
						<input class="form-control" type="text" name="rnfee" style="width: 80%!important;">
					</div>
					<div class="form-group">
						<input type="hidden" name="sid" value="<?=$id?>">
					</div>
					<div class="form-group">
						<input class="form-control" type="hidden" name="sfee" value="<?=$sfee?>" style="width: 80%!important;">
						<input class="form-control" type="hidden" name="rfee" value="<?=$rfee?>" style="width: 80%!important;">
						<input class="btn btn-lg btn-login text-uppercase fw-bold mb-2" style="background-color: #007C7F; color: #FFFFFF;" type="submit">
					</div>
				</form>
			</div>
		</div>
	</div>


 <?php 

 	include_once"footer.php";

  ?>