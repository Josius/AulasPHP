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
			echo "<h2>Str_split</h2>";
			//Essa função conta cada caractere e joga num vetor, até mesmo espaço em branco
			$nome = "Mar ia";
			$vetor = str_split($nome);
			print_r($vetor);
			
		?>
		
	</div>
	</body>

</html>
