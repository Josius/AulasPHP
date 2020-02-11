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
			echo "<h2>Exercicio 2 - Mostrar qual foi o ano anterior ao atual</h2>";	
			
			$atual = $_GET["aa"];
			echo "O ano atual é $atual e o ano anterior é ". --$atual;
			
			//COMENTARIOS INLINE
			# com este operador a esquerda
			// ou com este operador a esquerda
			
			//COMENTARIOS MULTILINE
			/*
			BLABALBAABBALBALBALBLBALBAL
			*/
			
			
		
		
		?>
	</body>

</html>
