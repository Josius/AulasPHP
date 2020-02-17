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
			//echo "<h2></h2>";
			/*
			FUNÇÃO INCLUDE - permite que o código rode mesmo não encontrando o arquivo solicitado
			include "02-funcoes2.php";
			
			FUNÇÃO REQUIRE - NÃO permite que o código rode sem o arquivo solicitado
			require "02-funcoes2.php";
			
			
			Aqui informa o seguinte - inclua/require o arquivo somente se ele não houver sido carregado antes, ou seja, somente uma vez
			include_once
			require_once
			
			
			*/
			include "02-funcoes.php";
			
			echo "<h1>Testando novas funcoes</h1>";
			ola();
			
			mostraValor(4);
			
			echo "<h2>Finalizando Programa...</h2>";
			
			
			
		?>
		COLOCAR BOTÃO DE VOLTAR AQUI
	</div>
	</body>

</html>
