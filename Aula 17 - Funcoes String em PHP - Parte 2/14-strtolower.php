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
			echo "<h2>Strtolower</h2>";
			//strtolower deixa as letras em minúsculas
			$nome = "Josimar Amaro de Sousa";
			$nome2 = strtolower($nome);
			echo "Seu nome é $nome2";
			
		?>
		</br></br><input type="submit" value="Tem medo nãO" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
