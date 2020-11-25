<!DOCTYPE html>
<html lang = "en"> 
	
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
	
	<form method = "POST" >
		
		<br><label for = "nome1" > | Nome: </label> <input type = "text" name = "nome1">
		<br>
		<label for = "curso"> | Curso: </label>
		<select name = "curso1" >
			<option value = " "> </option>
			<option type = "number" value = 1 > Sistemas de Informação </option>
			<option type = "number" value = 2 > Agronomia </option>
			<option type = "number" value = 3 > Engenharia Florestal </option>
			<option type = "number" value = 4 > Engenharia Ambiental </option>
			<option type = "number" value = 5 > Relações Públicas </option>
			<option type = "number" value = 6 > Jornalismo </option>
		</select>
		<br>
		<label for = "numero" > | Idade: </label> <input type = "number" name = "idade1">
		<br>
		<label for = "genero" > | Gênero: </label>
		<br>
		<input type = "radio" name = "genero1" value = 1 /> Feminino <br />
		<input type = "radio" name = "genero1" value = 2 /> Masculino <br />
		<input type = "radio" name = "genero1" value = 3 /> Outro <br />
		
		<br><label for = "nome2" > | Nome: </label> <input type = "text" name = "nome2">
		<br>
		<label for = "curso"> | Curso: </label>
		<select name = "curso2" >
			<option value = " "> </option>
			<option type = "number" value = 1 > Sistemas de Informação </option>
			<option type = "number" value = 2 > Agronomia </option>
			<option type = "number" value = 3 > Engenharia Florestal </option>
			<option type = "number" value = 4 > Engenharia Ambiental </option>
			<option type = "number" value = 5 > Relações Públicas </option>
			<option type = "number" value = 6 > Jornalismo </option>
		</select>
		<br>
		<label for = "numero" > | Idade: </label> <input type = "number" name = "idade2">
		<br>
		<label for = "genero" > | Gênero: </label>
		<br>
		<input type = "radio" name = "genero2" value = 1 /> Feminino <br />
		<input type = "radio" name = "genero2" value = 2 /> Masculino <br />
		<input type = "radio" name = "genero2" value = 3 /> Outro <br />
		
		<br><label for = "nome3" > | Nome: </label> <input type = "text" name = "nome3">
		<br>
		<label for = "curso"> | Curso: </label>
		<select name = "curso3" >
			<option value = " "> </option>
			<option type = "number" value = 1 > Sistemas de Informação </option>
			<option type = "number" value = 2 > Agronomia </option>
			<option type = "number" value = 3 > Engenharia Florestal </option>
			<option type = "number" value = 4 > Engenharia Ambiental </option>
			<option type = "number" value = 5 > Relações Públicas </option>
			<option type = "number" value = 6 > Jornalismo </option>
		</select>
		<br>
		<label for = "numero" > | Idade: </label> <input type = "number" name = "idade3">
		<br>
		<label for = "genero" > | Gênero: </label>
		<br>
		<input type = "radio" name = "genero3" value = 1 /> Feminino <br />
		<input type = "radio" name = "genero3" value = 2 /> Masculino <br />
		<input type = "radio" name = "genero3" value = 3 /> Outro <br />
		
		<br><input type = "submit" name = "exec"  value = "Executar">
	</form>
	
	<?php
		if(isset($_POST['exec'])){
			
			$n1 = $_POST['nome1'];
			$n2 = $_POST['nome2'];
			$n3 = $_POST['nome3'];
			
			$c1 = $_POST['curso1'];
 			$c2 = $_POST['curso2'];
			$c3 = $_POST['curso3'];
			
			$i1 = $_POST['idade1'];
			$i2 = $_POST['idade2'];
			$i3 = $_POST['idade3'];
			
			$g1 = $_POST['genero1'];
			$g2 = $_POST['genero2'];
			$g3 = $_POST['genero3'];
			
			$aluno[] = array(0 => $n1 , 1 => $c1 , 2 => $i1 , 3 => $g1);
			$aluno[] = array(0 => $n2 , 1 => $c2 , 2 => $i2 , 3 => $g2);
			$aluno[] = array(0 => $n3 , 1 => $c3 , 2 => $i3 , 3 => $g3);
			
			$soma = 0;
			
			for($i = 0; $i < 3; $i++){
				$soma = $soma + $aluno[$i][2];
			}
			
			$media = $soma / 3;
			
			// echo "<br>"; print_r($aluno);
			
			echo "<br> | Média da idade dos(as) alunos(as): $media";
			
			echo "<br> <br> | Alunos(as) que cursam Sistemas de Informação:";
			
			for($i = 0; $i < 3; $i++){
				if($aluno[$i][1] == 1){
					echo "<br> | ";
					echo $aluno[$i][0] . PHP_EOL;
				}
			}
			
			$count = 0;
			
			for($i = 0; $i < 3; $i++){
				if(($aluno[$i][1] == 2) && ($aluno[$i][3] == 1)){
					$count++;
				}
			}
			
			echo "<br> <br> | Número de alunas que cursam agronomia: $count";
		
		}
	?>

</body>
</html>
