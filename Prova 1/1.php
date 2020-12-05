<!DOCTYPE html>
<html lang = "en"> 
	
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
	
	<form action = "1.php" method = "GET" >
		<br><label for = "valor" > | Salário: </label> <input type = "number" name = "valor">
		<br><label for = "valor" > | Vendas: </label> <input type = "number" name = "vendas">
		<br><input type = "submit" name = "calcular"  value = "Calcular">
	</form>
	<?php
		if(isset($_GET['calcular'])){
			$valor = $_GET['valor'];
			$vendas = $_GET['vendas'];
			$salario = 0;
			$i = $vendas - 1500;
			
			if($vendas > 1500){
				$salario = $valor + (1500 * 0.03) + ($i * 0.05);
			}
			else{
				$salario = $valor + ($vendas * 0.03);
			}
			
			echo "<br> | Salário fixo: $valor";
			echo "<br> | Vendas: $vendas";
			echo "<br> | Salário líquido: $salario";
				
		}
	?>
</body>
</html>
