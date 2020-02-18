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
			<table border="1"><tr>
		<?php
			echo "<h2>Matrizes</h2>";
			
			$m = array(	array(6,4),
						array(4,9),
						array(3,2));
			print_r($m);
			$m[0][1] = $m[2][0];
			print_r($m);
			
			
		?>
			</table></tr>
		</pre>
		</br></br><input type="submit" value="Aqui votla" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
