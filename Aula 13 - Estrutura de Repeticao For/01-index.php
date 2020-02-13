<!doctype html>

<html>
	<head>
		<title>Estrutura de Repetição For</title>
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
			echo "<h2>Mostrar várias contagens utilizando a estrutura for</h2>";
			
			for($i=1; $i<=10; $i++){
				echo "$i ";
			}
			echo "</br>";
			for($i=10; $i>=1; $i--){
				echo "$i ";
			}
			echo "</br>";
			for($i=0; $i<=100; $i+=5){
				echo "$i ";
			}
			echo "</br>";
			for($i=20; $i>=0; $i-=2){
				print "$i ";
			}
		?>
		<p>COLOCAR BOTÃO DE VOLTAR AQUI</p>
	</div>
	</body>

</html>
