<!DOCTYPE html>
<html lang = "en"> 
	
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
	
	<form method = "POST" >
		<br><label for = "nome" > | Nome: </label> <input type = "text" name = "nome">
		<br><label for = "cpf" > | CPF: </label> <input type = "text" name = "cpf">
		<br><label for = "renda" > | Renda mensal: </label> <input type = "number" name = "renda">
		<br><input type = "submit" name = "calcular"  value = "Calcular">
	</form>
	
	<?php
	
		include "imposto.php";
		
		if(isset($_POST['calcular'])){
			$nome = $_POST ['nome'];
			$cpf = $_POST ['cpf'];
			$renda = $_POST ['renda'];
			$irrf = IRRF($renda);
			
			echo "<br>| Nome: $nome";
		    echo "<br>| CPF: $cpf";
			echo "<br>| Renda: R$$renda";
			if($irrf == 0){
				echo "<br>| IRRF: INSENTO(A)";
			}
			else{
				echo "<br>| IRRF: R$$irrf";
			}
			
			

		}
	?>
	
</body>
</html>
