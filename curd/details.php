<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<table border="1">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 

					include("db_connetion.php");

					$sql = "SELECT * FROM curd";

					$result = mysqli_query($con, $sql);

					while($rows = mysqli_fetch_array($result)){

				 ?>

				 <tr class="delete<?php echo $rows['id'] ?>">
				 	<td><?php echo $rows['name']; ?></td>
				 	<td><?php echo $rows['email']; ?></td>
				 	<td><?php echo $rows['contact']; ?></td>
				 	<td><img src="http://localhost/basic php program/curd/uploads/<?php echo $rows['image']; ?>" width="200" height="200"></td>
				 	<td>
				 		<button data-id="<?php echo $rows['id'] ?>" class="delete"> Delete </button>
				 		<a href="index.php?id=<?php echo $rows['id'] ?>"> update </button></td>
				 </tr>

				<?php 

					}
				 ?>
			</tbody>
		</table>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".delete").click(function(){
				var id = $(this).attr('data-id');

				$.ajax({
					url: "delete.php",
					type: "POST",
					data:{'id':id},
					dataType:'json'
				})
				.done(function(data){

					if(data == '1'){

						$(".delete"+id).fadeOut();
					}
				})
				.fail(function(data){
					console.log(data);
				})
				.always(function(){

					console.log("complete");
				})
			})
		})
	</script>
</body>
</html>