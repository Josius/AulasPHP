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
			echo "<h2>Chaves personalizadas</h2>";
			
			$v = array(3=>5,
						1=>9,
						0=>8,
						7=>7);
			print_r($v);
			$v[]= "E";
			print_r($v);
			unset($v[2]); // cód funciona sem problemas, mesmo com unset em um índice que não esteja alocando memória
			unset($v[0]);
			print_r($v);
		?>
		</pre>
		</br></br><input type="submit" value="Aqui votla" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
