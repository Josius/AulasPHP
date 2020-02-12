<!doctype html>

<html>
	<head>
		<title>Estrutura de Repetição While</title>
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
			echo "<h2>Mostra uma contagem progressiva de 1 até 10</h2>";
			
			$cont = 1;
			while($cont <= 10){
				echo $cont. "</br>";
				$cont++;
			}
			
			echo "<h2>Mostra uma contagem regressiva de 10 até 1</h2>";
			
			$cont = 10;
			while($cont >= 1){
				echo number_format($cont, 1). "</br>";
				$cont--;
			}
			
			echo "<h2>Mostra uma contagem regressiva de 10 até 0, de 2 em 2</h2>";
			
			$cont = 10;
			while($cont>=0){
				echo $cont. "</br>";
				$cont-=2;
			}
		?>
		
	</body>

</html>
