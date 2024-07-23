<?php 

	include_once"connection/connect.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SuperiorCollege</title>
	<link rel="icon" href="media/kisspng-the-superior-college-faisalabad-bahawalpur-univers-college-logo-5ae02f341c4620.5999990315246415881158.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-4.5.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.15.4-web/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark position-fixed" style="width: 100%; z-index: 999999;background-color: #007C7F; ">
		<div class="container-fluid" >
			<div class="row justify-content-between">
				<div class="col-md-5 p-0 m-1">
					<a class="navbar-brand pl-3 font-weight-bold mt-1 text-center" href="index.php"><img src="media/download.png" width="40px"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				<div class="col-md-2"></div>
		  		<div class="col-md-4  ">
		  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
					  	<ul class="navbar-nav mr-auto ">
							<li class="nav-item active p1-3">
								<a class="nav-link font-weight-bold pt-3" style="padding: 10px;" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active p1-3">
								<a class="nav-link font-weight-bold pt-3" style="" href="#">About&nbsp;us</a>
							</li>
							<li class="nav-item dropdown  navbar-color active font-weight-bold pl-3" >
							    <a class="nav-link dropdown-toggle navbar-color pt-3" style="padding: 10px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Course</a>
							    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							    	<?php 
 
										$sql = "SELECT * FROM class";
										$que =mysqli_query($con,$sql);

										$i = 1;
										while ($row =mysqli_fetch_array($que)) 
										{
											$mid = $row['c_id'];
											$name = $row['c_name'];

									?>
							    	<a class="dropdown-item" href="#"><?=$name?></a>
							    	<?php

							    		$i++;
							    		}

							    	?>
							    </div>
							</li>
							<li class="nav-item dropdown navbar-color active pl-3">
							    <a class="nav-link dropdown-toggle navbar-color font-weight-bold pt-3"style="padding:10px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Teachers</a>
							    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							        <a class="dropdown-item" href="#">header/features/pricing/info</a>
							    <div class="dropdown-divider"></div>
							        <a class="dropdown-item" href="#">contect/shop/accordions/video</a>
							    <div class="dropdown-divider"></div>
							        <a class="dropdown-item" href="#">Gallery/team/testimonials/forms</a>
							    <div class="dropdown-divider"></div>
							        <a class="dropdown-item" href="#">progress /maps/contact/footer</a>
							    </div>
							</li>
							<li class="nav-item active p1-3">
								<a class="nav-link font-weight-bold pt-3" style="" href="studentpanel/index.php">Log&nbsp;In</a>
							</li>
						</ul>
					</div>
				</div>
			 </div>
	 	</div>
	</nav>