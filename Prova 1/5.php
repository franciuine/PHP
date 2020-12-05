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
		<br><label for = "nome" > | UF: </label> <input type = "text" name = "uf">
		<br><input type = "submit" name = "escrever"  value = "Escrever">
	</form>
	
	<?php
		if(isset($_POST['escrever'])){
			$uf = $_POST['uf'];
			$nome = $_POST['nome'];
			
			$array['sp'] = "São Paulo";
			$array['rj'] = "Rio de Janeiro";
			$array['mg'] = "Minas Gerais";
			$array['es'] = "Espírito Santo";
			$array['rs'] = "Rio Grande do Sul";
			$array['sc'] = "Santa Catarina";
			$array['ba'] = "Bahia";
			$array['pa'] = "Pará";
			$array['ac'] = "Acre";
			$array['am'] = "Amazonas";
			
			foreach ($array as $key => $value){
				if($key == $uf){
					$estado = $array[$key];
					echo "<br> $estado";
				}
			}
			
			if(($uf == 'sp') || ($uf == 'rj') || ($uf == 'mg') || ($uf == 'es')){
				$regiao = "Sudeste";
			}
			if(($uf == 'rs') || ($uf == 'sc')){
				$regiao = "Sul";
			}
			if($uf == 'ba'){
				$regiao = "Nordeste";
			}
			if(($uf == 'pa') || ($uf == 'ac') || ($uf == 'am')){
				$regiao = "Norte";
			}
			
			echo "<br> | Estado: $estado";
			echo "<br> | Região: $regiao";
		}
	?>
	
</body>
</html>
