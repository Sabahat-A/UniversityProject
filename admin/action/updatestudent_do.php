<?php 

	include_once"../../connection/connect.php";


	$id=$_POST['sid'];
	$name=$_POST['name'];
	$tfee=$_POST['tfee'];
	$sfee=$_POST['sfee'];
	$rfee=$_POST['rfee'];
	$rnfee=$_POST['rnfee'];
	
	$sfee = $sfee+$rnfee;
	$rfee = $rfee-$rnfee;



	//echo $id."<br>". $name."<br>".$tfee."<br>".$sfee."<br>".$rfee;


	$sql="UPDATE student SET st_name='$name', st_tfee='$tfee' , st_sfee='$sfee' , st_rfee='$rfee' WHERE st_id='$id'";
	$que=mysqli_query($con,$sql);

	if ($que) 
	{
		echo "<script> alert('Value are updated')</script>";
		header("refresh:1; url=../viewstudent.php");
	}
	else 
	{
		echo "<script> alert('Value are not updated')</script>";
		header("refresh:1; url=../viewstudent.php");
	}

 ?>