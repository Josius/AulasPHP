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
			echo "<h2>Wordwrap</h2>";
			
			$t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
			//$tt = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
			$r = wordwrap($t,5, "<br/>\n", false); //Se a palavra tiver <= 5 letras, o false quebrará por palavra
			echo $r;
			echo "</br></br>";
			$r = wordwrap($t,5, "<br/>\n", true); //Independente da qtd de letras, a cada 5 ele irá quebrar a linha.
			echo $r;
			
		?>
		COLOCAR BOTÃO DE VOLTAR AQUI
	</div>
	</body>

</html>
