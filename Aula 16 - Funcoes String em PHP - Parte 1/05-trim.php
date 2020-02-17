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
			echo "<h2>Trim</h2>";
			
			$nome = "   José da Silva   ";
			echo $nome;
			echo "</br>O nome acima com a função strlen = ". strlen($nome). " caracteres</br>";
			
			$novo = trim($nome);
			echo $novo;
			echo "</br>O nome acima com a função trim + strlen = ". strlen($novo). " caracteres</br>";
			
		?>
		
	</div>
	</body>

</html>
