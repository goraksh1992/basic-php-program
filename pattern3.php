<?php 

	$num = 65;

	for($i=0; $i<5; $i++){

		for($j=0; $j<=$i; $j++){
			
			$ch = chr($num);
			echo $ch." ";
			$num = $num + 1;
		}

		echo "<br>";
	}

 ?>