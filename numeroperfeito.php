<?php
 
	function np ($n){
		$i; //contador
		$soma = 0;
		
		for($i = 1; $i <= ($n - 1); $i++){ 
			if($n % $i == 0){
				$soma = $soma + $i;
			}
		}
			if($n == $soma){
				return 1;
			}
			else{
				return 0;
			}
	}
	
?>
