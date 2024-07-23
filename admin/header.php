<?php 

	session_start();


	if (!isset($_SESSION['a_username'])) 
	{
		header("location:index.php");
	}

	include_once"../connection/connect.php";
 ?>


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
	<link rel="stylesheet" type="text/css" href="../css/DataTables-1.11.2/datatables.min.css">
	
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #007C7F;">
	  <a class="navbar-brand" href="panel.php"><img src="../media/download.png" width="50px"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse " id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto ">
	      <li class="nav-item active">
	        <a class="nav-link" href="panel.php" style="color: #FFFFFF;">HOME <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="about.php" style="color: #FFFFFF;">About Us</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;">
	       		Staff
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="addstaff.php">Add new Staff</a>
	          <a class="dropdown-item" href="viewstaff.php">View Staff</a>
	          <div class="dropdown-divider"></div>
	        </div>
	      </li>
	       <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;">
	       		Classes
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="addclass.php">Add new Class</a>
	          <a class="dropdown-item" href="viewclass.php">View Class</a>
	          <div class="dropdown-divider"></div>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;">
	       		Student
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="addstudent.php">Add new Student</a>
	          <a class="dropdown-item" href="selectclassstudent.php">View Student</a>
	          <div class="dropdown-divider"></div>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;">
	       		Lecture
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="addlecture.php">Add new Lecture</a>
	          <a class="dropdown-item" href="lectureclass.php">View Lecture</a>
	          <div class="dropdown-divider"></div>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;">
	       		Marks Of Students
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="marks.php">Add new Marks</a>
	          <a class="dropdown-item" href="selectclassmarks.php">View Marks</a>
	          <div class="dropdown-divider"></div>
	        </div>
	      </li>
	    </ul>
	  </div>
	  <div class="float-right">
	  	 <a class="nav-link font-weight-bolder" style="color:#FFFFFF;" href="action/logout.php" tabindex="-1" aria-disabled="true" 
	  	 >Log Out</a>
	  </div>
	</nav>