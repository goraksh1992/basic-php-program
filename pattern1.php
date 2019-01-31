<?php 

	function pattern($num){

		for($i=0; $i<$num; $i++){

			for($j=0; $j<$i; $j++){

				echo "*";
			}

			echo "<br>";
		}
	}

	pattern(5);

 ?>