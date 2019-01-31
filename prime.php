<?php 

	function prime($num){

		for($i=2; $i<$num; $i++){

			if($num % $i == 0){

				return 1;
				break;
			}
		}

		return 0;
	}

	$x = prime(25);

	if($x == 1){

		echo "not prime";
	}else{

		echo "prime";
	}

 ?>