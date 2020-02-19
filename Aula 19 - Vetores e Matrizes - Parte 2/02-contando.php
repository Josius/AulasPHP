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
			echo "<h2>Contando os itens</h2>";
			
			$v = array("A","J","M","X","K8","ff", 8, 8.9, true, false);
			$tot = count($v);
			echo "O vetor tem $tot elementos</br>";
			print_r($v);
			
		?>
		</pre>
		</br></br><input type="submit" value="Aqui volta abestado" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
