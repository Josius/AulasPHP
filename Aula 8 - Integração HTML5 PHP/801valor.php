<!doctype html>

<html>
	<head>
		<title>Integração HTML5 + PHP</title>
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
			echo "<h2>Calcular a Raiz Quadrada</h2>";	
			
			$valor = $_GET["v"];
			$rq = sqrt($valor);
			echo "A raiz quadrada de $valor é igual a ". number_format($rq,2);
		?>
		<br/><a href="8-integracaohtml5php1.html">Voltar</a>
	</body>

</html>