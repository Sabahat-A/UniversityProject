<?php 

	include_once"../../connection/connect.php";

	$name=$_POST['name'];
	$address=$_POST['address'];
	$degree=$_POST['degree'];
	$salary=$_POST['salary'];

	//echo $name.$address.$degree.$salary;

	$sql="INSERT INTO staff(s_name, s_address , s_degree , s_salary) VALUES('$name' , '$address' , '$degree' , '$salary')";
	$que=mysqli_query($con,$sql);

	if ($que) 
	{
		echo "<script> alert('Value are added')</script>";
		header("refresh:0.0; url=../addstaff.php");
	}
	else 
	{
		echo "<script> alert('Value are not added')</script>";
		header("refresh:0.0; url=../addstaff.php");
	}

 ?>