<?php 

	function pattern($num){

		$n = 1;
		for($i=0; $i<$num; $i++){

			for($j=0; $j<=$i; $j++){

				echo $n." ";
				$n = $n + 1;
			}

			//$n = $n + 1;
			echo "<br>";
		}
	}

	pattern(5);

 ?>