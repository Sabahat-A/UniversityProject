<?php 

	include_once"../../connection/connect.php";

	$name=$_POST['cname'];

	//echo $name;

	$sql="INSERT INTO class(c_name) VALUES('$name')";
	$que=mysqli_query($con,$sql);

	if ($que) 
	{
		echo "<script> alert('Value are added')</script>";
		header("refresh:0.5; url=../addclass.php");
	}
	else 
	{
		echo "<script> alert('Value are not added')</script>";
		header("refresh:0.5; url=../addclass.php");
	}

 ?>