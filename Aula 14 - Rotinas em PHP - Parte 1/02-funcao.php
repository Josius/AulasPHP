<!doctype html>

<html>
	<head>
		<title>Rotinas em PHP - Parte 1</title>
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
	<div>
		<?php
			echo "<h2>Criar uma função que some dois valores numéricos inteiros</h2>";
			
			function soma($a,$b){
				$s= $a + $b;
				return $s;
			}
			
			$x= 3;
			$y = 4;
			$r = soma($x, $y);
			echo "A soma entre $x e $y é igual a $r";
			
			$r = soma(-4,8);
			echo "</br>A soma entre -4 e 8 é igual a $r";
			
			function somaB($a,$b){
				return $a + $b;
			}
			
			$x=5;
			$y=6;
			$r=somaB($x,$y);
			echo "</br>A soma entre $x e $y é igual a $r";
		?>
		
	</div>
	</body>

</html>
