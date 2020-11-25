<!DOCTYPE html>
<html lang = "en"> 
	
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
	
	<form method = "POST" >
		<br><label for = "numero" > | Valor: </label> <input type = "number" name = "val1">
		<br><label for = "numero" > | Valor: </label> <input type = "number" name = "val2">
		<br><label for = "numero" > | Valor: </label> <input type = "number" name = "val3">
		<br><label for = "numero" > | Valor: </label> <input type = "number" name = "val4">
		<br><label for = "numero" > | Valor: </label> <input type = "number" name = "val5">
		<br><label for = "numero" > | Valor: </label> <input type = "number" name = "val6">
		<br><label for = "numero" > | Valor: </label> <input type = "number" name = "val7">
		<br><label for = "numero" > | Valor: </label> <input type = "number" name = "val8">
		<br><label for = "numero" > | Valor: </label> <input type = "number" name = "val9">
		<br><label for = "numero" > | Valor: </label> <input type = "number" name = "val10">
		<br><input type = "submit" name = "exec"  value = "Executar">
	</form>
	
	<?php
		if(isset($_POST['exec'])){
			$valores[] = $_POST['val1'];
			$valores[] = $_POST['val2'];
			$valores[] = $_POST['val3'];
			$valores[] = $_POST['val4'];
			$valores[] = $_POST['val5'];
			$valores[] = $_POST['val6'];
			$valores[] = $_POST['val7'];
			$valores[] = $_POST['val8'];
			$valores[] = $_POST['val9'];
			$valores[] = $_POST['val10'];
			
			
			for ($i = 0; $i < 10; $i++){
				for ($j = $i + 1; $j < 10; $j++){
					if ($valores[$i] > $valores[$j]){
						$aux =  $valores[$i];
						$valores[$i] = $valores[$j];
						$valores[$j] = $aux;
					}
				}
			}
			
			echo "<br> | Valores em ordem crescente:";

			for ($i = 0; $i < 10; $i++){
				echo "<br> | $valores[$i]";
			}
			
			echo "<br>";
			
			for ($i = 0; $i < 10; $i++){
				for ($j = $i + 1; $j < 10; $j++){
					if ($valores[$i] < $valores[$j]){
						$aux =  $valores[$i];
						$valores[$i] = $valores[$j];
						$valores[$j] = $aux;
					}
				}
			}
			
			echo "<br> | Valores em ordem decrescente:";

			for ($i = 0; $i < 10; $i++){
				echo "<br> | $valores[$i]";
			}
			
			echo "<br>";
			$soma = 0;
			
			for ($i = 0; $i < 10; $i++){
				$soma = $soma + $valores[$i];
			}
			
			echo "<br> | Soma dos valores: $soma";		
		}
	?>
	
</body>
</html>
