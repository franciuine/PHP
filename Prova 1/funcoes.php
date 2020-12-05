<?php

	function maiorsalto($saltos){
		$maior = 0;
		
		for($i = 0; $i < 5; $i++){
			if($saltos[$i] > $maior){
				$maior = $saltos[$i];
			}
		}
		
		return $maior;
	}
	
	function menorsalto($saltos){
		$menor = 1000;
		
		for($i = 0; $i < 5; $i++){
			if($saltos[$i] < $menor){
				$menor = $saltos[$i];
			}
		}
		
		return $menor;
	}
	
	function media($saltos, $menor, $maior){
		$soma = 0;
		
		for ($i = 0; $i < 5; $i++){
			if(($saltos[$i] == $menor) || ($saltos[$i] == $maior)){
				$soma = $soma + 0;
			}
			else{
				$soma = $soma + $saltos[$i];
			}
		}
		
		$media = $soma / 3;
		
		return $media;
	}
?>
