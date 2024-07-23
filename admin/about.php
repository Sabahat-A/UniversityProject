<?php 

	include_once"header.php";

		$sql="SELECT * FROM about";
		$que = mysqli_query($con,$sql);
		$record = mysqli_fetch_array($que);

		$id=$record['a_id'];
		$dname=$record['a_dname'];
		$pname=$record['a_pname'];
		$email1=$record['a_email1'];
		$email2=$record['a_email2'];
		$phone1=$record['a_phone1'];
		$phone2=$record['a_phone2'];
		$address=$record['a_address'];


		//echo $id.$dname.$pname;

 ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form class="p-5" action="action/update.php" method="POST">
				<div class="form-group">
					<label class="font-weight-bolder">Director Name :</label>
					<input class="form-control" type="text" name="dname" value="<?=$dname?>" style="width: 80%!important;">
				</div>
				<div class="form-group">
					<label class="font-weight-bolder">Principal Name :</label>
					<input class="form-control" type="text" name="pname" value="<?=$pname?>" style="width: 80%!important;">
				</div>
				<div class="form-group">
					<label class="font-weight-bolder">Email no 1 :</label>
					<input class="form-control" type="text" name="mail1" value="<?=$email1?>" style="width: 80%!important;">
				</div>
				<div class="form-group">
					<label class="font-weight-bolder">Email no 2 :</label>
					<input class="form-control" type="text" name="mail2" value="<?=$email2?>" style="width: 80%!important;">
				</div>
				<div class="form-group">
					<label class="font-weight-bolder">Phone no 1 :</label>
					<input class="form-control" type="text" name="phone1" value="<?=$phone1?>" style="width: 80%!important;">
				</div>
				<div class="form-group">
					<label class="font-weight-bolder">Phone no 2 :</label>
					<input class="form-control" type="text" name="phone2" value="<?=$phone2?>" style="width: 80%!important;">
				</div>
				<div class="form-group">
					<label class="font-weight-bolder">Address :</label>
					<input class="form-control" type="text" name="address" value="<?=$address?>" style="width: 80%!important;">
					<input type="hidden" name="aid" value="<?=$id?>">
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