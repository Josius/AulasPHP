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
			
			$tab = isset($_GET["tabuada"])? $_GET["tabuada"] : 0;
			echo "<h2>Tabuada do $tab</h2>";
			for($i=1; $i<=10; $i++){
				$res = $tab*$i;
				echo "$tab X $i = $res</br>";
			}
			
		?>
		<p><input type="submit" value="Voltar" onclick="location.href='javascript:history.go(-1)'"/></p>
	</div>
	</body>

</html>
