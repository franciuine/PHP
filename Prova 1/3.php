<!DOCTYPE html>
<html lang = "en"> 
	
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
	
	<form method = "POST" >
		<br><label for = "numero" > | Salto 1: </label> <input type = "number" name = "salto1">
		<br><label for = "numero" > | Salto 2: </label> <input type = "number" name = "salto2">
		<br><label for = "numero" > | Salto 3: </label> <input type = "number" name = "salto3">
		<br><label for = "numero" > | Salto 4: </label> <input type = "number" name = "salto4">
		<br><label for = "numero" > | Salto 5: </label> <input type = "number" name = "salto5">
		<br><label for = "nome" > | Nome: </label> <input type = "text" name = "nome">
		<br><input type = "submit" name = "verificar"  value = "Verificar">
	</form>
	
	<?php
		include "funcoes.php";
		if(isset($_POST['verificar'])){
			$saltos[] = $_POST ['salto1'];
			$saltos[] = $_POST ['salto2'];
			$saltos[] = $_POST ['salto3'];
			$saltos[] = $_POST ['salto4'];
			$saltos[] = $_POST ['salto5'];
			$nome = $_POST ['nome'];
			
			$maior = maiorsalto($saltos);
			$menor = menorsalto($saltos);
			$media = media($saltos, $menor, $maior);
			
			echo "<br> | Atleta: $nome";
			echo "<br>";
			echo "<br> | Primeiro salto: $saltos[0] m";
			echo "<br> | Segundo salto: $saltos[1] m";
			echo "<br> | Terceiro salto: $saltos[2] m";
			echo "<br> | Quarto salto: $saltos[3] m";
			echo "<br> | Quinto salto: $saltos[4] m";
			echo "<br>";
			echo "<br> | Melhor salto: $maior m";
			echo "<br> | Pior salto: $menor m";
			echo "<br> | Média dos demais saltos: $media m";
			echo "<br>";
			echo "<br> | Resultado final: ";
			echo "<br> | $nome: $media m";
			
		}
	?>
		
</body>
</html>
