<?php 

	include("db_connetion.php");

	$id = $_POST['id'];

	$sql = mysqli_query($con, "DELETE FROM curd WHERE id = '$id' ");

	if($sql){

		echo "1";

	}else{

		echo "2";
	}

 ?>