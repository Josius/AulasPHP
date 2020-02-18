<!doctype html>

<html>
	<head>
		<title>Vetores e Matrizes - Parte 1</title>
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
		<pre>
		<?php
			echo "<h2>Gerenciando elementos</h2>";
			
			$v = array("A", "J", "M", "X", "K");
			print_r($v);
			//$v[] = "O"; ao invés dessa ao lado, usamos a abaixo:
			array_push($v, "O");//insere no fim do vetor
			print_r($v);
			array_pop($v);//retira o último elemento do vetor
			print_r($v);
			array_unshift($v,"O");//insere no começo do vetor
			print_r($v);
			array_shift($v);//elimina o primeiro elemento do vetor
			print_r($v);
			
			
		?>
		</pre>
		</br></br><input type="submit" value="voltar" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
