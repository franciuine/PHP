<?php
	function aliquota($renda){
		if($renda <= 1903.98){
			return 0;
		}
		if($renda >= 1903.99 && $renda <= 2826.65){
			return 0.075;
		}
		if($renda >= 2826.66 && $renda <= 3751.05){
			return 0.15;
		}
		if($renda >= 3751.06 && $renda <= 4664.68){
			return 0.225;
		}
		if($renda > 4664.68){
			return 0.275;
		}
	}
	
	function INSS($renda){
		if($renda <= 1039){
			return 0.075;
		}
		if($renda >= 1039 && $renda <= 2098.60){
			return 0.09;
		}
		if($renda >= 2098.61 && $renda <= 3134.40){
			return 0.12;
		}
		if($renda > 3134.41){ 
			return 0.14;
		}
		
	}
	
	function IRRF($renda){
		
		$novarenda = $renda - ($renda * INSS($renda)); //aplica desconto INSS
		
		if($novarenda <= 1903.98){
			return 0;
		}
		if($novarenda >= 1903.99 && $novarenda <= 2826.65){
			$novarenda2 = $novarenda - ($novarenda * aliquota($novarenda));     //com o INSS descontado, verifica onde a nova renda se encaixa na tabela e aplica a alíquota
			$novarenda3 = $novarenda2 - 142.80;									//subtrair a parcela a deduzir 
			return $novarenda3;
		}
		if($novarenda >= 2826.66 && $novarenda <= 3751.05){
			$novarenda2 = $novarenda - ($novarenda * aliquota($novarenda));
			$novarenda3 = $novarenda2 - 354.80;
			return $novarenda3;
		}
		if($novarenda >= 3751.06 && $novarenda <= 4664.68){
			$novarenda2 = $novarenda - ($novarenda * aliquota($novarenda));
			$novarenda3 = $novarenda2 - 636.13;
			return $novarenda3;
		}
		if($novarenda > 4664.68){
			$novarenda2 = $novarenda - ($novarenda * aliquota($novarenda));
			$novarenda3 = $novarenda2 - 869.36;
			return $novarenda3;
		}
	}

?>
