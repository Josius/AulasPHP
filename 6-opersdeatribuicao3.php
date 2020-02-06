<!doctype html>

<html>
	<head>
		<title>Operadores de Atribuição</title>
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
			echo "<h2>Exercicio 3 - Praticar o uso de variáveis referenciadas</h2>";	
			
			echo "Com a seguinte atribuição de variável: $-b = $-a:";
			$a = 3;
			$b = $a;
			$b += 5;
			echo "<br/><br/>A variável A vale $a";
			echo "<br/>A variável B vale $b";
			
			
			echo "<br/><br/>Com a seguinte atribuição de variável: $-b = &$-a:";
			$a = 3;
			$b = &$a;
			$b += 5;
			echo "<br/><br/>A variável A vale $a";
			echo "<br/>A variável B vale $b";
		?>
	</body>

</html>
