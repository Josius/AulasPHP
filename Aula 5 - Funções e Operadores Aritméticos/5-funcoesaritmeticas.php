<!doctype html>

<html>
	<head>
		<title>Funções Aritméticas em PHP</title>
		<meta charset="utf-8" />
		<style>
			h2{
				font: 15pt Arial;
				color: #171559;
				font-weight: bold;
			}
		</style>
	</head>

	<body>
	
		<?php
			
			$v1 = $_GET["x"];			
			$v2 = $_GET["y"];

			echo "<h2>Valores recebidos: $v1 e $v2</h2>";
			
			//VALOR ABSOLUTO
			echo "O valor absoluto de $v2 e ". abs($v2);
			
			//POTENCIA
			echo "<br/>O valor de $v1<sup>$v2</sup> e ". pow($v1, $v2);
			//note como esta no final -> pow($v1, abs($v2));
			echo "<br/>O valor de $v1<sup>$v2</sup>  e  ". pow($v1, abs($v2));
			
			//RAIZ QUADRADA
			echo "<br/>A raiz de $v1 e ". sqrt($v1);
			
			//ROUND - função destinada para arredondamentos com valores reais
			echo "<br/>O valor de $v2 arredondado e ". round($v2);
			echo "<br/>O valor de $v2 arredondado para cima e ". ceil($v2);
			echo "<br/>O valor de $v2 arredondado para baixo e ". floor($v2);
			//Round sempre vai arredondar para o nº mais próximo, logo $var <= 3.4 || $var >= 3.5 = 4
			//Ceil sempre vai arredondar para cima, logo $var >= 3.1 = 4
			//Floor sempre vai arredondar para baixo, logo $var <= 3.9 = 3
			
			//INTVAL - essa função pega a parte inteira de um nº real, ou seja, ele trunca o nº
			echo "<br/>A parte inteira de um numero real $v2 e ". intval($v2);
			
			//NUMBER_FORMAT - formata o numero com quantas casas decimais vc quiser
			echo "<br/>O valor de $v1 em moeda e R$ ". number_format($v1, 2);
			echo "<br/>O valor de $v1 em moeda e R$ ". number_format($v1,2,",",".");
			echo "<br/>O valor de $v1 com 10 casas decimais e ". number_format($v1, 10);
		?>
	
	</body>

</html>




