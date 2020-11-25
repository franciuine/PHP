<?php
	function maria ($nomes){
		for($i = 0; $i < 10; $i++){
			if($nomes[$i] == 'maria'){
				echo "<br> | O nome 'Maria' foi encontrado na posição $i do array!";
				return 1;
			}
		}
		return 0;
	}
?>
