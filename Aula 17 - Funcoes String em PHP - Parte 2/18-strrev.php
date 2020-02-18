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
			echo "<h2>Strrev</h2>";
			//strrev deixa a string ao contrário
			$nome = "JosimaR Amaro de sousa";
			$name = strrev($nome);
			
			echo $name;
			
		?>
		</br></br><input type="submit" value="volt" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
