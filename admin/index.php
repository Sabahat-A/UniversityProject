<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SuperiorCollege</title>
	<link rel="icon" href="../media/kisspng-the-superior-college-faisalabad-bahawalpur-univers-college-logo-5ae02f341c4620.5999990315246415881158.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-4.5.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-4.5.3/dist/js/bootstrap.min.js">
	<link rel="stylesheet" href="../css/stylesheet.css">
	
</head>
<body>
 
	 <?php 

		//echo md5('superior123');

	 ?>

	<div class="container-fluid ps-md-0">
	  <div class="row g-0">
	    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
	    </div>
	    <div class="col-md-8 col-lg-6">
	      <div class="login d-flex align-items-center py-5">
	        <div class="container">
	          <div class="row">
	            <div class="col-md-9 col-lg-8 mx-auto">
	              <h3 class="login-heading mb-4">Welcome to the Admin!</h3>

	              <!-- Sign In Form -->
	              <form action="action/index_do.php" method="POST">
	                <div class="form-floating mb-3">
	                  <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
	                  <label for="floatingInput">Email address</label>
	                </div>
	                <div class="form-floating mb-3">
	                  <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
	                  <label for="floatingPassword">Password</label>
	                </div>

	                <div class="form-check mb-3">
	                  <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
	                  <label class="form-check-label" for="rememberPasswordCheck">
	                    Remember password
	                  </label>
	                </div>

	                <div class="d-grid">
	                  <input class="btn btn-lg btn-login text-uppercase fw-bold mb-2" style="background-color: #007C7F; color: #FFFFFF;" type="submit" value="Sign In">
	                </div>

	              </form>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<script type="text/javascript" src="css/bootstrap-4.5.3/js2/jquery-3.5.1.slim.min.js"></script>
  	<script type="text/javascript" src="css/bootstrap-4.5.3/js2/popper.min.js"></script>
  	<script type="text/javascript" src="css/bootstrap-4.5.3/dist/js/bootstrap.min.js"></script>
	
</body>
</html>