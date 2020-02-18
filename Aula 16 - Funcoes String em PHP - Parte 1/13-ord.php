<!doctype html>

<html>
	<head>
		<title>Funções String em PHP - Parte 1</title>
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
			echo "<h2>ord</h2>";
			
			$lt = "C";
			$cod = ord($lt);
			print("A letra $lt corresponde ao código $cod.</br>");
			$lt = "J";
			$cod = ord($lt);
			print("$lt = $cod.</br>");
			$lt = "o";
			$cod = ord($lt);
			print("$lt = $cod.</br>");
			$lt = "s";
			$cod = ord($lt);
			print("$lt = $cod.</br>");
			$lt = "i";
			$cod = ord($lt);
			print("$lt = $cod.</br>");
			$lt = "m";
			$cod = ord($lt);
			print("$lt = $cod.</br>");
			$lt = "a";
			$cod = ord($lt);
			print("$lt = $cod.</br>");
			$lt = "r";
			$cod = ord($lt);
			print("$lt = $cod.</br>");
			
			
			
		?>
		</br></br><input type="submit" value="Clicka com vontade :D" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
