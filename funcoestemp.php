<?php
	function temperatura ($mes){
		$maior = 0;
		$menor = 200;
		
		for($i = 0; $i < 12; $i++){
			if($mes[$i] > $maior){
				$maior = $mes[$i];
			}
			if($mes[$i] < $menor){
				$menor = $mes[$i];
			}
		}
		
		echo "<br> | Maior temperatura média: $maior ºC";
		echo "<br> | Menor temperatura média: $menor ºC";
	}
?>
