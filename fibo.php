<?php 

	$first = 0;
	$second = 1;
	$sum = 0;

	echo $first." ".$second;

	for($i=0; $i<5; $i++){

		$sum = $first + $second;

		echo $sum;

		$first = $second;
		$second = $sum;
	}

 ?>