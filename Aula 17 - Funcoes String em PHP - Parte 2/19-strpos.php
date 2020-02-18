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
			echo "<h2>Strpos</h2>";
			//Indica em qual posição se encontra o início da string. NOTA: a primeira posição é 0(zero)
			//Se digitar a palavra errada, como PHP em minúscula, a resposta será um false, que é uma string vazia
			$frs = "Estou aprendendo PHP";
			$pos = strpos($frs, "PHP");
			echo "$frs</br>A string foi encontrada na posição $pos";
			$pos = strpos($frs, "php");
			echo "</br>$frs</br>A string foi encontrada na posição $pos";
		?>
		</br></br><input type="submit" value="Aqui votlta retardado" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
