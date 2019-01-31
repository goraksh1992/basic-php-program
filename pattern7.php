<?php 

	$num = 8;

	for($i=$num; $i>=0; $i--){

		for($j=1; $j<=$num; $j++){

			echo $j;
		}

		$num = $num - 1;

		echo "<br>";
	}

 ?>