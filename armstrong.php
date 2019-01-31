<?php 

	$number = 370;
	$num = $number;
	$array = [];
	
	while(floor($number)){

		$n = $number % 10;
		$new = ($n * $n * $n);
		$number = $number/10;

		array_push($array, $new);
	}

	$sum = array_sum($array);

	if($num == $sum){

		echo "Armstrong number";
	}else{
		echo "Not armstrong";
	}
 ?>