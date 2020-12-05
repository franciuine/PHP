<?php
	function menor($a, $b, $c){
		$menor = 0;
		
		if($a <= $b){
			$menor = $a;
		}
		else{
			$menor = $b;
		}
		if($c <= $menor){
			$menor = $c;
		}
		
		echo "<br><h1>| Menor valor: $menor</h1>";
	}
?>
