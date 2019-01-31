<?php 

	include("db_connetion.php");

	if(isset($_FILES['upload'])){

	    $errors= array();
	    $file_name = $_FILES['upload']['name'];
	    $file_size =$_FILES['upload']['size'];
	    $file_tmp =$_FILES['upload']['tmp_name'];
	    $file_type=$_FILES['upload']['type'];

	    $file_ext=strtolower(end(explode('.',$_FILES['upload']['name'])));
	      
	    $extensions= array("jpeg","jpg","png");
	      
	    if(in_array($file_ext,$extensions) === false){

	        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
	    }
	      
	    if($file_size > 2097152){

	        $errors[]='File size must be excately 2 MB';
	    }
	      
	    if(empty($errors) == true){

	        move_uploaded_file($file_tmp,"uploads/".$file_name);
	        //echo "Success";

	        $name = $_REQUEST['name'];
			$email = $_REQUEST['email'];
			$contact = $_REQUEST['contact'];

			$sql = "INSERT INTO curd (name,email,contact,image) VALUES ('".$name."', '".$email."', '".$contact."', '".$file_name."')";

			$result = mysqli_query($con, $sql);
			$id = mysqli_insert_id($con);

			if($id > 0){

				header("location:details.php");

			}else{

				echo "error";
			}

	    }else{

	        print_r($errors);
	    }
	}

 ?>