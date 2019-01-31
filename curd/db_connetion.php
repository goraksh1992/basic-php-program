<?php 

	$con = mysqli_connect("localhost", "root", "","curd_operation");

	if(!$con){

		echo "Connection error";
		die();

	}
 ?>