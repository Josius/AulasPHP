<!doctype html>

<html>
	<head>
		<title>Funções String em PHP - Parte 2</title>
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
			echo "<h2>Substr</h2>";
			//substr corta a string em uma posição inicial e termina em uma posição final, todas a escolher pelo programador
			//com numero negativo, começa do final
			$site = "Curso em Video";
			echo "$site</br>";
			$sub = substr($site, 0, 5);
			echo "$sub</br> ";
			$sub = substr($site, 3, 7);
			echo "$sub</br> ";
			$sub = substr($site, 8, 3);
			echo "$sub</br> ";
			$sub = substr($site, 10);
			echo "$sub</br> ";
			$sub = substr($site, -10);
			echo "$sub</br> ";
			$sub = substr($site, -5, 2);
			echo "$sub</br> ";
			
		?>
		</br></br><input type="submit" value="E faça-se a luzh" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
