<?php 

	include_once"../../connection/connect.php";

	$sid=$_POST['sid'];
	$cid=$_POST['cid'];
	$lid=$_POST['id'];
	$marks=$_POST['marks'];

	//echo $name.$sid.$stid.$cid.$timing;

	$sql="INSERT INTO marks( st_id , c_id , l_id , m_marks) VALUES('$sid' , '$cid' , '$lid' , '$marks')";
	$que=mysqli_query($con,$sql);

	if ($que) 
	{
		echo "<script> alert('Value are added')</script>";
		header("refresh:0.5; url=../marks.php");
	}
	else 
	{
		echo "<script> alert('Value are not added')</script>";
		header("refresh:0.5; url=../marks.php");
	}

 ?>