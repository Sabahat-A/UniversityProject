<?php 

	include_once"header.php";
	include_once"../connection/connect.php";

 ?>


	<div class="container-fluid ">
		<div class="row ">
			<div class="col-md-6 a_banner">
				
			</div>
			<div class="col-md-6 p-5">
				<h3 style="color: #007C7F;">Welcome to Admin Panel</h3>
				<p>Superior Colleges is a standerd of study.</p>
			</div>
		</div>	
	</div>
	
	<div class="container m-5">
		<div class="row justify-content-between">
			<?php 

				$sql="SELECT * FROM staff";
				$que = mysqli_query($con,$sql);

				$num = mysqli_num_rows($que);


			 ?>
			<div class="col-md-3 m-2">
				<div class="card" style="width: 18rem; background-color: #007C7F;">
				 	<div class="card-body">
						<p class="card-text" style="color: #FFFFFF;">
							Staff of Superior
							<br>
						 Total:<?php echo $num; ?>
						</p>
						<a href="viewstaff.php" class="btn">View</a>
					</div>
				</div>
			</div>
			<?php 

				$sql_c="SELECT * FROM class";
				$que_c = mysqli_query($con,$sql_c);

				$num_c = mysqli_num_rows($que_c);


			 ?>
			<div class="col-md-3 m-2">
				<div class="card" style="width: 18rem; background-color: #007C7F;">
				 	<div class="card-body">
						<p class="card-text" style="color: #FFFFFF;">
							Course in Superior
							<br>
						 Total:<?php echo $num_c; ?>
						</p>
						<a href="viewclass.php" class="btn">View</a>
					</div>
				</div>
			</div>
			<?php 

				$sql_s="SELECT * FROM student";
				$que_s = mysqli_query($con,$sql_s);

				$num_s = mysqli_num_rows($que_s);


			 ?>
			<div class="col-md-3 m-2">
				<div class="card" style="width: 18rem; background-color: #007C7F;">
				 	<div class="card-body">
						<p class="card-text" style="color: #FFFFFF;">
							Students of Superior
							<br>
						 Total:<?php echo $num_s; ?>
						</p>
						<a href="viewstudent.php" class="btn">View</a>
					</div>
				</div>
			</div>
			<?php 

				$sql_m="SELECT * FROM marks";
				$que_m = mysqli_query($con,$sql_m);

				$num_m = mysqli_num_rows($que_m);


			 ?>
			<div class="col-md-3 m-2">
				<div class="card" style="width: 18rem; background-color: #007C7F;">
				 	<div class="card-body">
						<p class="card-text" style="color: #FFFFFF;">
							Marks of Students
							<br>
						 Total:<?php echo $num_m; ?>
						</p>
						<a href="viewmarks.php" class="btn">View</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php 

	include_once"footer.php";

 ?>