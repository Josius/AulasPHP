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
			echo "<h2>Strtoupper</h2>";
			//strtoupper deixa todas as letras em maiúsculas
			$nome = "Josimar Amaro de Sousa";
			$name = strtoupper($nome);
			echo "Seu nome ficou assim com strtoupper $name";
			
		?>
		</br></br><input type="submit" value="Volta, volta, voltla" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
