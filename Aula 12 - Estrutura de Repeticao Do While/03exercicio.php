<!doctype html>

<html>
	<head>
		<title>Estrutura de Repetição Do While</title>
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
			
			$tab = isset($_GET["tabuada"]) ? $_GET["tabuada"] : 0;
			echo "<h2>Mostrando a tabuada de $tab</h2>";
			$cont = 1;
			do{
				$res = $tab*$cont;
				echo "$tab X $cont = $res</br>";
				$cont++;
			}while($cont <=10);
		?>
	</br><input type="submit" value="Voltar" onclick="location.href='javascript:history.go(-1)'"/>
	</div>	
	</body>

</html>
