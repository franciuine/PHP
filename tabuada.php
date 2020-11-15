<!DOCTYPE html>
<html lang = "en"> 
	
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
	
	<form method = "POST" >
		<br><label for = "numero" > | Digite um número de 1 a 10: </label> <input type = "number" name = "num">
		<br><input type = "submit" name = "calcular"  value = "Calcular">
	</form>
	
	<?php
		if(isset($_POST['calcular'])){
			$num = $_POST['num'];
			$i = 1;
			
			if($num < 1 || $num > 10){
				echo "| Digite um número dentro do intervalo [0,10]";
				return 0;
			}
			else{
				echo "<table border='1'>";
				for($i = 1; $i <= 10; $i++){
					$resultado = $i * $num;
					echo "<tr><td> $i x $num = </td><td> $resultado </td></tr>";
				}	
				echo "</table>";
			}
		}
	?>

</body>
</html>
