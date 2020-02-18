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
			echo "<h2>chr</h2>";
			
			$letra = chr(66);
			echo "A letra de código 66 é: ". $letra. "</br>";
			$letra = chr(56);
			echo "A letra de código 56 é: ". $letra. "</br>";
			$letra = chr(124);
			echo "A letra de código 124 é: ". $letra;
			
			
		?>
		</br></br><input type="submit" value="volta, POHa!" onclick="location.href='javascript:history.go(-1)'" />
	</div>
	</body>

</html>
