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
			echo "<h2>Criar um procedimento que some dois valores numéricos inteiros</h2>";
			
			function soma($a, $b){
				$s = $a+$b;
				
				echo "<h3>A soma vale $s</h3>";
			}
			
			soma(3,4);
			soma(8,2);
			$x=9;
			$y=15;
			soma($x,$y);
			
		?>
		
	</div>
	</body>

</html>
