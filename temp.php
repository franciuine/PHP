<!DOCTYPE html>
<html lang = "en"> 
	
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
	
	<form method = "POST" >
		<br><label for = "numero" > | Temperatura média em janeiro (em ºC): </label> <input type = "number" name = "jan">
		<br><label for = "numero" > | Temperatura média em fevereiro (em ºC): </label> <input type = "number" name = "fev">
		<br><label for = "numero" > | Temperatura média em março (em ºC): </label> <input type = "number" name = "mar">
		<br><label for = "numero" > | Temperatura média em abril (em ºC): </label> <input type = "number" name = "abr">
		<br><label for = "numero" > | Temperatura média em maio (em ºC): </label> <input type = "number" name = "mai">
		<br><label for = "numero" > | Temperatura média em junho (em ºC):  </label> <input type = "number" name = "jun">
		<br><label for = "numero" > | Temperatura média em julho (em ºC):  </label> <input type = "number" name = "jul">
		<br><label for = "numero" > | Temperatura média em agosto (em ºC):  </label> <input type = "number" name = "ago">
		<br><label for = "numero" > | Temperatura média em setembro (em ºC):  </label> <input type = "number" name = "set">
		<br><label for = "numero" > | Temperatura média em outubro (em ºC):  </label> <input type = "number" name = "out">
		<br><label for = "numero" > | Temperatura média em novembro (em ºC):  </label> <input type = "number" name = "nov">
		<br><label for = "numero" > | Temperatura média em dezembro (em ºC): </label> <input type = "number" name = "dez">
		<br><input type = "submit" name = "exec"  value = "Executar">
	</form>
	
	<?php
		include "funcoestemp.php";
		if(isset($_POST['exec'])){
			$mes[] = $_POST['jan'];
			$mes[] = $_POST['fev'];
			$mes[] = $_POST['mar'];
			$mes[] = $_POST['abr'];
			$mes[] = $_POST['mai'];
			$mes[] = $_POST['jun'];
			$mes[] = $_POST['jul'];
			$mes[] = $_POST['ago'];
			$mes[] = $_POST['set'];
			$mes[] = $_POST['out'];
			$mes[] = $_POST['nov'];
			$mes[] = $_POST['dez'];
			
			temperatura($mes);
		}
	?>
</body>
</html>
