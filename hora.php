<?php
	date_default_timezone_set ('America/Sao_Paulo');

	$hora = date('H');
	
	if($hora >= 6 && $hora <= 12){
		echo "<b> BOM DIA </b>";
	}
	if($hora >= 13 && $hora <= 18){
		echo "<i> BOA TARDE </i>";
	}
	if(($hora >= 19 && $hora <= 24) || $hora == 0){
		echo "<h3> BOA NOITE </h3>";
	}
	if($hora >= 1 && $hora <= 5){
		echo "<h1> Usando a internet de madrugada? Vamos dormir! </h1>";
	}

?>
