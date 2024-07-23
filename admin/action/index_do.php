<?php 

	include_once"../../connection/connect.php";

	$name = mysqli_real_escape_string($con,$_POST['email']);
	$pass = mysqli_real_escape_string($con,$_POST['password']);

	$enpass = md5($pass);

	//echo $name."<br>".$enpass;

	$sql="SELECT * FROM admin WHERE a_username='$name' AND a_password='$enpass'";
	$que=mysqli_query($con,$sql);
	$num = mysqli_num_rows($que);


	//echo $num;

	if ($num) 
	{
		session_start();
		$_SESSION['a_username'] = $name;

		header("location:../panel.php");
	}
	else
	{
		echo "<script> alert('Username Or Password Incorrect') </script>";
		header("refresh:0.5;url=../index.php");
	}

 ?>