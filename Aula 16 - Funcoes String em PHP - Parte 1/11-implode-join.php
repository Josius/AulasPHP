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
			echo "<h2>implode</h2>";
			//Junta o vetor e add entre cada posição do vetor um caractere a sua escolha.
			//Funciona da mesma maneira a função join(), basta trocar a palavra 'implode' por 'join'
			$vetor[0] = "Curso";
			$vetor[1] = "em";
			$vetor[2] = "Video";
			$texto = implode("#", $vetor);
			print($texto);
			echo "</br>";
			$texto = implode(" ", $vetor);
			print($texto);
			echo "</br>";
			$texto = implode("+", $vetor);
			print($texto);
			echo "</br>";
			$texto = implode("$", $vetor);
			print($texto);
			echo "</br>";
			$texto = implode("-", $vetor);
			print($texto);
			echo "</br>";
			
			
		?>
		
	</div>
	</body>

</html>
