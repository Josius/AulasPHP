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
			echo "<h2>Rtrim</h2>";
			$nome = "   José da Silva   ";
			echo $nome;
			echo "</br>O nome acima com a função strlen = ". strlen($nome). "</br>";

			//rtrim elimina os espaços a direita do nome, no fim.
			$novo = rtrim($nome);
			echo $novo;
			echo "</br>O nome acima com a função rtrim + strlen = ". strlen($novo). "</br>";
			
		?>
		COLOCAR BOTÃO DE VOLTAR AQUI
	</div>
	</body>

</html>
