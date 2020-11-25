<!DOCTYPE html>
<html lang = "en"> 
	
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
	
	<form method = "POST" >
		<br><label for = "numero" > | Nome: </label> <input type = "text" name = "nome1">
		<br><label for = "numero" > | Nome: </label> <input type = "text" name = "nome2">
		<br><label for = "numero" > | Nome: </label> <input type = "text" name = "nome3">
		<br><label for = "numero" > | Nome: </label> <input type = "text" name = "nome4">
		<br><label for = "numero" > | Nome: </label> <input type = "text" name = "nome5">
		<br><label for = "numero" > | Nome: </label> <input type = "text" name = "nome6">
		<br><label for = "numero" > | Nome:  </label> <input type = "text" name = "nome7">
		<br><label for = "numero" > | Nome:  </label> <input type = "text" name = "nome8">
		<br><label for = "numero" > | Nome:  </label> <input type = "text" name = "nome9">
		<br><label for = "numero" > | Nome:  </label> <input type = "text" name = "nome10">
		<br><input type = "submit" name = "procurar"  value = "Procurar">
	</form>
	
	<?php
	
		include "maria.php";
		if(isset($_POST['procurar'])){
			$nomes[] = $_POST['nome1'];
			$nomes[] = $_POST['nome2'];
			$nomes[] = $_POST['nome3'];
			$nomes[] = $_POST['nome4'];
			$nomes[] = $_POST['nome5'];
			$nomes[] = $_POST['nome6'];
			$nomes[] = $_POST['nome7'];
			$nomes[] = $_POST['nome8'];
			$nomes[] = $_POST['nome9'];
			$nomes[] = $_POST['nome10'];
			
			$check = maria($nomes);
			
			if($check == 0){
				echo "<br> | O nome 'Maria' não foi encontrado!";
			}
		}
		
	?>
</body>
</html>
