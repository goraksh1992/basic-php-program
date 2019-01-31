<?php 

	include('db_connetion.php');

	$id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$contact = $_REQUEST['contact'];

	$sql = "UPDATE curd SET name = '".$name."', email = '".$email."', contact = '".$contact."' WHERE id = '$id'";

	$result = mysqli_query($con, $sql);

	if($result){

		header("location:details.php");

	}else{

		echo "error";
	}

 ?>