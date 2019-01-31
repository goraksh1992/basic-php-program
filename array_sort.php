<?php 

	$array = [4,5,68,1,52,23];

	//print_r(array_reverse($array));

	for($i=0; $i<count($array); $i++){

		for($j=0; $j<count($array)-1; $j++){

			if($array[$j] < $array[$j+1]){

				$temp = $array[$j+1];
				$array[$j+1] = $array[$j];
				$array[$j] = $temp;
			}
		}
	}

	print_r($array);

 ?>