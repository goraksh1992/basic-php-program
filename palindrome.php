<?php 

	//$str = "gaurav";
	//$s = "";

		// for($j = strlen($str)-1; $j >=0; $j--){

		// 	$s = $s.$str[$j];
			
		// }

		// if($str == $s){

		// 	echo "palimdrom";

		// }else{

		// 	echo "not";
		// }


	$num = 1211;
	$new = 0;
	$temp = $num;

	while (floor($num)) {
		
		$d = $num % 10;
		$new = $new * 10 + $d;
		$num = $num / 10;
	}

	if($new == $temp){

		echo "yes";

	}else{

		echo "no";
	}


 ?>