<?php
	function testacem ($valor){
		$aux = $valor;
		$notas = 0;
		
		while ($aux >= 100){
			$aux = $aux - 100;
			if ($aux >= 0){
				$notas++;
			}
		}
		return $notas;
	}
	
	function testacinq ($valor){
		$aux = $valor;
		$notas = 0;
		
		while ($aux >= 50){
			$aux = $aux - 50;
			if ($aux >= 0){
				$notas++;
			}
		}
		return $notas;
	}
	
	function testavinte ($valor){
		$aux = $valor;
		$notas = 0;
		
		while ($aux >= 20){
			$aux = $aux - 20;
			if ($aux >= 0){
				$notas++;
			}
		}
		return $notas;
	}
	
	function testadez ($valor){
		$aux = $valor;
		$notas = 0;
		
		while ($aux >= 10){
			$aux = $aux - 10;
			if ($aux >= 0){
				$notas++;
			}
		}
		return $notas;
	}
	
	function testacinco ($valor){
		$aux = $valor;
		$notas = 0;
		
		while ($aux >= 5){
			$aux = $aux - 5;
			if ($aux >= 0){
				$notas++;
			}
		}
		return $notas;
	}
?>
