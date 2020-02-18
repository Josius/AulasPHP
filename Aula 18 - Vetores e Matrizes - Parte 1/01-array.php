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
			echo "<h2>Array</h2>";
			
			$n = array(3,5,8,2);
			print_r($n);
			$n[] = 7;
			print_r($n);
			//$n[] = (8,3,2); - - - ESTA ATRIBUIÇÃO NÃO FUNCIONA
			//print_r($n);
			
		?>
		</pre>
		</br></br><input type="submit" value="Aqui votla" onclick="location.href='javascript:history.go(-1)'"	/>
	</div>
	</body>

</html>
