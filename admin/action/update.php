<?php 

	include_once"../../connection/connect.php";


	$id=$_POST['aid'];
	$dname=$_POST['dname'];
	$pname=$_POST['pname'];
	$email1=$_POST['mail1'];
	$email2=$_POST['mail2'];
	$phone1=$_POST['phone1'];
	$phone2=$_POST['phone2'];		
	$address=$_POST['address'];
	




	//echo $id."<br>". $email1."<br>" .$email2."<br>".$phone1."<br>". $phone2."<br>".$address."<br>".$pname;


	$sql="UPDATE about SET a_dname='$dname', a_pname='$pname' , a_email1='$email1' , a_email2='$email2' , a_phone1='$phone1', a_phone2='$phone2' , a_address='$address' WHERE a_id='$id'";
	$que=mysqli_query($con,$sql);

	if ($que) 
	{
		echo "<script> alert('Value are updated')</script>";
		header("refresh:1; url=../about.php");
	}
	else 
	{
		echo "<script> alert('Value are not updated')</script>";
		header("refresh:1; url=../about.php");
	}

 ?>