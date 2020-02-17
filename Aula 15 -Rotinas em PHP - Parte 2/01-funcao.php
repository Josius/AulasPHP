<!doctype html>

<html>
	<head>
		<title>Rotinas em PHP - Parte 2</title>
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
			echo "<h2>Criar um procedimento que use a passagem de parâmetros por referência</h2>";
			//Passando por valor
			function testeA($x){
				$x += 2;
				echo "<h3>O valor de X é $x</h3>";
			}
			
			$a = 3;
			testeA($a);
			echo "<h3>O valor de A é $a</h3>";
			
			//Passando por referência
			function testeB(&$x){
				$x += 2;
				echo "<h3>O valor de X é $x</h3>";
			}
			
			$a = 3;
			testeB($a);
			echo "<h3>O valor de A é $a</h3>";
			
		?>
		COLOCAR BOTÃO DE VOLTAR AQUI
	</div>
	</body>

</html>
