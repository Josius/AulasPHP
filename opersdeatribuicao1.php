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
			echo "<h2>Exercicio 1 - aplicar 10% de desconto ao preço de um produto</h2>";	
			
			$preco = $_GET["p"];
			echo "O preço do produto é R$ ". number_format($preco,2,",",".");
			$preco = ($preco*10/100) + $preco;
			echo "<br/>O novo preço com 10% de aumento será R$ ". number_format($preco,2,",",".");
			//ou
			$preco += $preco*10/100;
			echo "<br/>O novo preço com 10% de aumento será R$ ". number_format($preco,2,".",",");
			//com desconto
			$preco -= $preco*10/100;
			echo "<br/>O novo preço com 10% de desconto será R$ ". number_format($preco,2);
			
			
		
		
		?>
	</body>

</html>
