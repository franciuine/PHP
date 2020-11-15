<!DOCTYPE html>
<html lang = "en"> 
	
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
	
	<form>
		<br><label for = "n" > Digite um número: </label> <input type = "text" name = "n" >
		<br><input type = "submit" name = "check"  value = "Verificar">
	</form>
	
	<?php
	include "numeroperfeito.php";
	
	if(isset($_GET['check'])){
		$n = $_GET ['n'];
		$v = np($n); //variável que verifica se o número é perfeito
		
		if($v == 1){
			echo "<br> <strong> $n é um número perfeito! </strong>";
		}
		else{
			echo "<br> <strong> $n não é um número perfeito! </strong>";
		}
	}
	?>
</body>
</html>
