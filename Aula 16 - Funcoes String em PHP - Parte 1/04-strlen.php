<!doctype html>

<html>
	<head>
		<title>Funções String em PHP - Parte 1</title>
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
			echo "<h2>Strlen</h2>";
			
			$t = "A função strlen funciona para contar caracteres. Espaço também conta como caractere. Esta frase possui seguinte quantidade de caracteres: ";
			$tam = strlen($t);
			echo "$t $tam";
			
		?>
		
	</div>
	</body>

</html>
