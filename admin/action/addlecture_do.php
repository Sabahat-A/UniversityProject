<?php 

	include_once"../../connection/connect.php";

	$sid=$_POST['sid'];
	$cid=$_POST['id'];
	$stid=$_POST['stid'];
	$name=$_POST['lname'];
	$timing=$_POST['timing'];

	//echo $name.$sid.$stid.$cid.$timing;

	$sql="INSERT INTO lecture(s_id , c_id , st_id , l_name, l_timing) VALUES('$sid','$cid','$stid','$name' , '$timing')";
	$que=mysqli_query($con,$sql);

	if ($que) 
	{
		echo "<script> alert('Value are added')</script>";
		header("refresh:0.5; url=../addlecture.php");
	}
	else 
	{
		echo "<script> alert('Value are not added')</script>";
		header("refresh:0.5; url=../addlecture.php");
	}

 ?>