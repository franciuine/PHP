<!DOCTYPE html>
<html lang = "en"> 
	
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
	
	<form method = "POST" >
		<br><label for = "numero" > | Valor 1: </label> <input type = "number" name = "v1">
		<br><label for = "numero" > | Valor 2: </label> <input type = "number" name = "v2">
		<br><label for = "numero" > | Valor 3: </label> <input type = "number" name = "v3">
		<br><label for = "numero" > | Valor 4: </label> <input type = "number" name = "v4">
		<br><label for = "numero" > | Valor 5: </label> <input type = "number" name = "v5">
		<br><label for = "numero" > | Valor 6: </label> <input type = "number" name = "v6">
		<br><label for = "numero" > | Valor 7: </label> <input type = "number" name = "v7">
		<br><label for = "numero" > | Valor 8: </label> <input type = "number" name = "v8">
		<br><label for = "numero" > | Valor 9: </label> <input type = "number" name = "v9">
		<br><label for = "numero" > | Valor 10: </label> <input type = "number" name = "v10">
		<br><label for = "numero" > | Código (1 ou 2): </label> <input type = "number" name = "cod">
		<br><input type = "submit" name = "escrever"  value = "Escrever">
	</form>
	<?php
		if(isset($_POST['escrever'])){
			$valores[] = $_POST ['v1'];
			$valores[] = $_POST ['v2'];
			$valores[] = $_POST ['v3'];
			$valores[] = $_POST ['v4'];
			$valores[] = $_POST ['v5'];
			$valores[] = $_POST ['v6'];
			$valores[] = $_POST ['v7'];
			$valores[] = $_POST ['v8'];
			$valores[] = $_POST ['v9'];
			$valores[] = $_POST ['v10'];
			$cod = $_POST ['cod'];
			
			if($cod == 1){
				for($i = 0 ; $i < 10 ; $i++){
					echo "<br> $valores[$i]";
				}
			}
			elseif($cod == 2){
				for($i = 9 ; $i >= 0 ; $i--){
					echo "<br> $valores[$i]";
				}
			}
			else{
				echo "<br> | Código inválido!";
			}
		}
	?>
</body>
</html>
