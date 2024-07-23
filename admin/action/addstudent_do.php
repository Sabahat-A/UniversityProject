<?php 

	include_once"../../connection/connect.php";

	$id=$_POST['id'];
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$address=$_POST['address'];
	$tfee=$_POST['tfee'];
	$sfee=$_POST['sfee'];
	$rfee=$_POST['rfee'];

	//echo $name.$id.$tfee.$sfee;

	$sql="INSERT INTO student(c_id , st_name , st_fname , st_address , st_fee , st_sfee , st_rfee) VALUES('$id','$name' , '$fname' , '$address' , '$tfee' , '$sfee' , '$rfee')";
	$que=mysqli_query($con,$sql);

	if ($que) 
	{
		echo "<script> alert('Value are added')</script>";
		header("refresh:0.5; url=../addstudent.php");
	}
	else 
	{
		echo "<script> alert('Value are not added')</script>";
		header("refresh:0.5; url=../addstudent.php");
	}

 ?>