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
			echo "<h2>Chaves associativas</h2>";
			
			$v = array("nome" => "Ana",
						"idade" => 23,
						"peso" => 65.5);
			print_r($v);
			$v["fuma"] = true;
			$v['banho'] = false;
			foreach($v as $k => $c){
				echo "O campo $k possuí conteúdo $c </br>";
			}
			
		?>
		</pre>
		</br></br><input type="submit" value="Aqui votla" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
