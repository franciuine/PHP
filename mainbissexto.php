<!DOCTYPE html>
<html lang = "en"> 
	
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
	
	<form method = "POST" >
		<br><label for = "ano" > | Digite um ano: </label> <input type = "number" name = "ano">
		<br><input type = "submit" name = "verificar"  value = "Verificar">
	</form>
	
	<?php
	
		include "bissexto.php";
		if(isset($_POST['verificar'])){
			$ano = $_POST['ano'];
			$b = bissexto($ano);
			
			if($b == 1){
				echo "<br>| $ano é/foi/será um ano bissexto";
			}
			else{
				echo "<br>| $ano não é/foi/será um ano bissexto";
			}
		}
	?>

</body>
</html>
