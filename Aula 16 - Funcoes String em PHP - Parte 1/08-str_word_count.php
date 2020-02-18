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
			echo "<h2>Str_word_count</h2>";
			//Entrega a quantidade de palavras que contém uma string
			
			$frase = "Eu vou estudar PHP agora";
			echo $frase;
			$count = str_word_count($frase, 0);
			echo "</br>A frase acima possui ". $count. " palavras</br>";

            //Com o '1' na função abaixo, ele gera um vetor
			$count = str_word_count($frase, 1);
            print_r($count);
			
            //Com o '2' na função abaixo, ele cria um vetor mantendo o posicionamento de cada palavra dentro do vetor
			$count = str_word_count($frase, 2);
			echo "</br>";
            print_r($count);

		?>

	</div>
	</body>

</html>
