<?php 
	
	include_once "../../connection/connect.php";


	$id=$_GET['lid'];



		$sql="DELETE FROM lecture WHERE l_id='$id'";
		$que=mysqli_query($con,$sql);
		if ($que) 
		{
			echo "<script> alert('Value are Deleted')</script>";
			header("refresh:1; url=../viewlecture.php");
		}
		else 
		{
			echo "<script> alert('Value are not Deleted')</script>";
			header("refresh:1; url=../viewlecture.php");
		}

?>