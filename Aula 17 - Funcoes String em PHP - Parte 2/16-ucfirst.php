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
			echo "<h2>Ucfirst</h2>";
			//ucfirst deixa a primeira letra em maiúscula (uc = upper case)
			$name = "josimar amaro de sousa";
			$nome = ucfirst($name);
			echo $nome;
			echo "</br>";
			$name = "josiMar amaRo de souSa";
			echo $name. "</br>O nome, após ucfirst e strtolower ficou assim:</br>";
			$nome = ucfirst(strtolower($name));
			echo $nome;
			
		?>
		</br></br><input type="submit" value="Aqui volta" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
