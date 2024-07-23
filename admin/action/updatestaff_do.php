<?php 

	include_once"../../connection/connect.php";


	$id=$_POST['sid'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$degree=$_POST['degree'];
	$salary=$_POST['salary'];
	




	//echo $id."<br>". $name."<br>".$address."<br>".$degree."<br>".$salary;


	$sql="UPDATE staff SET s_name='$name', s_address='$address' , s_degree='$degree' , s_salary='$salary' WHERE s_id='$id'";
	$que=mysqli_query($con,$sql);

	if ($que) 
	{
		echo "<script> alert('Value are updated')</script>";
		header("refresh:1; url=../viewstaff.php");
	}
	else 
	{
		echo "<script> alert('Value are not updated')</script>";
		header("refresh:1; url=../updatestaff.php");
	}

 ?>