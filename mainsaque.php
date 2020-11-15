<!DOCTYPE html>
<html lang = "en"> 
	
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
	
	<form action = "mainsaque.php" method = "GET" >
		<br><label for = "valor" > | Digite o valor a ser sacado: </label> <input type = "number" name = "valor">;
		<br><input type = "submit" name = "sacar"  value = "Sacar">
	</form>
	
	<?php
	
		include "saque.php";
		if(isset($_GET['sacar'])){
			$valor = $_GET ['valor'];
		
			if($valor % 5 != 0){
				echo "<br> | Digite um valor múltiplo de 5!";
				return 0;
			}
			else{
				$cem = testacem ($valor);
				$restante = $valor - ($cem * 100);
				$cinq = testacinq ($restante);
				$restante = $restante - ($cinq * 50);
				$vinte = testavinte ($restante);
				$restante = $restante - ($vinte * 20);
				$dez = testadez ($restante);
				$restante = $restante - ($dez * 10);
				$cinco = testacinco ($restante);
			
			
				echo "<br> | Foram sacadas:";
				echo "<br> | $cem notas de R$100,00";
				echo "<br> | $cinq notas de R$50,00";
				echo "<br> | $vinte notas de R$20,00";
				echo "<br> | $dez notas de R$10,00";
				echo "<br> | $cinco notas de R$5,00";
				echo "<br><br> | Totalizando R$$valor,00";
				return 0;
			}
		}
	?>
	
</body>
</html>
