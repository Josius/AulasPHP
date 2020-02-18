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
			echo "<h2>Explode</h2>";
			//Explode é uma versão no da função strwordcount. Este não funciona muito bem com letras acentuadas, neste caso o ideal é o explode, que procura o caractere entre aspas para quebrar a linha, ou seja, pode ser espaço em branco ou até mesmo uma letra.
			$site = "Curso em Videôõ";
			$vetor = explode(" ", $site);
			print_r($vetor);
			echo "</br>";
			$vetor = explode("s", $site);
			//$swc = str_word_count($site, 2);
			print_r($vetor);
			//print_r($swc);
			
			
		?>
		
	</div>
	</body>

</html>
