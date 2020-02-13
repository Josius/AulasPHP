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
			echo "<h2>Exibir a tabuada de um número escolhido pelo usuário, de 1 a 10</h2>";
			
			$n = isset($_GET["num"]) ? $_GET["num"] : 1;
			
			for($c=1; $c<=10; $c++){
				$r = $n * $c;
				echo "$n X $c = $r</br>";
			}
			
		?>
		<p><input type="submit" value="Voltar" onclick="location.href='javascript:history.go(-1)'"/></p>
	</div>
	</body>

</html>
