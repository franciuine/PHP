<!DOCTYPE html>
<html lang = "en"> 
	
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
	
	<form method = "POST" >
		<br><label for = "numero" > | Valor A: </label> <input type = "number" name = "a">
		<br><label for = "numero" > | Valor B: </label> <input type = "number" name = "b">
		<br><label for = "numero" > | Valor C: </label> <input type = "number" name = "c">
		<br><input type = "submit" name = "verificar"  value = "Verificar">
	</form>
	<?php
		include "menorvalor.php";
		if(isset($_POST['verificar'])){
			$a = $_POST ['a'];
			$b = $_POST ['b'];
			$c = $_POST ['c'];
			
			menor($a, $b, $c);
			
		}
	?>
</body>
</html>
