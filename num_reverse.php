<?php 

	$number = 1024;
	$new = 0;

	while(floor($number)){

		$n = $number % 10;
		$new = $new * 10 + $n;
		$number = $number/10;
	}

	echo $new;

 ?>