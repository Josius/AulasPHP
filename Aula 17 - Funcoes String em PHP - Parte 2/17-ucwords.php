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
			echo "<h2>Ucwords</h2>";
			//ucwords coloca a primeira letra de cada palavra/nome em maiúsculas
			$nome = "josimar amaro de sousa";
			$name = ucwords($nome);
			
			echo $name;
			
		?>
		</br></br><input type="submit" value="volte" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
