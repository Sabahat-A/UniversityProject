<?php 
	
	include_once "../../connection/connect.php";


	$id=$_GET['sid'];



		$sql="DELETE FROM student WHERE st_id='$id'";
		$que=mysqli_query($con,$sql);
		if ($que) 
		{
			echo "<script> alert('Value are Deleted')</script>";
			header("refresh:1; url=../viewstudent.php");
		}
		else 
		{
			echo "<script> alert('Value are not Deleted')</script>";
			header("refresh:1; url=../viewstudent.php");
		}

?>