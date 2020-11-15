<?php
	
	function bissexto ($ano){
		if($ano % 4 == 0){
			if($ano % 100 == 0){
				if($ano % 400 == 0){
					return 1;
				}
				else{
					return 0;
				}
			}
			else{
				return 1;
			}
		}
		else{
			return 0;
		}
	}

?>
