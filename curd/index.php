<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<?php 

	    include("db_connetion.php");

		if(isset($_GET['id'])){

			$id = $_GET['id'];

			$sql = "SELECT * FROM curd WHERE id = '$id'"; 
			$result = mysqli_query($con, $sql);

			while ($row = mysqli_fetch_array($result)) {

	?>
			<form action="db_update.php" method="post">
				<input type="hidden" name="id" value="<?php echo  $id; ?>">
				Name : <input type="text" name="name" id="name" value="<?php echo $row['name'] ?>"><br><br>
				Email : <input type="text" name="email" id="email" value="<?php echo $row['email'] ?>"><br><br>
				Conatct : <input type="text" name="contact" id="contact" value="<?php echo $row['contact'] ?>"><br><br>
				<input type="submit" name="submit" value="update">
			</form>	

	<?php		}


		}else{
	?>

		<form action="db_save.php" method="post" enctype= multipart/form-data>
				Name : <input type="text" name="name" id="name" ><br><br>
				Email : <input type="text" name="email" id="email"><br><br>
				Conatct : <input type="text" name="contact" id="contact"><br><br>
				Image : <input type="file" name="upload" id='upload'> <br><br>
				<input type="submit" name="submit" value="save">
		</form>	

	<?php

			
		}

	 ?>

</body>
</html>