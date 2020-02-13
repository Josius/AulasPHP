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
		<?php
			echo "<h2>Script para calcular o fatoria de uma número inteiro</h2>";
			/*
			$fat=$_GET["val"];
			do{
				$res=$fat*($fat--);
				echo "$res ";
			}while($fat>=1);
			echo "</br>$res ";
			*/
			$v = isset($_GET["val"]) ? $_GET["val"] : 1;
			
			echo "<h1>Calculando o fatorial de $v </h1>";
			
			$c = $v;
			$fat = 1;
			do{
				$fat = $fat * $c;
				$c--;	
			}while($c >= 1);
			echo "<h2>$v! = $fat</h2>";
			
		?>
		</br></br><input type="submit" value="Voltar" onclick="location.href='javascript:history.go(-1)'"/>
	</body>

</html>
