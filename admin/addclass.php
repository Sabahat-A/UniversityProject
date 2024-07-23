<?php 

	include_once"header.php";

 ?>

 	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7">
				<form action="action/addclass_do.php" method="POST" class="p-5">
					<div class="form-group">
						<label class="font-weight-bolder">Class Name :</label>
						<input type="text" name="cname" class="form-control">
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