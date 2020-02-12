<!doctype html>

<html>
	<head>
		<title>Estrutura Condicional Switch</title>
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
		<?php
			echo "<h2>Ler um numero e qual operação realizar, dobro, cubo ou raiz quadrada</h2>";
			
			$n = isset($_GET["num"]) ? $_GET["num"] : 0;
			$o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
			switch ($o){
				case 1:
					$r = $n * 2;
					break;
				case 2:
					$r = $n * $n * $n;
					//o abaixo não funcionou
					//$r = $n ^ 3;
					break;
				case 3:
					$r = sqrt($n);
					//os dois abaixo não funcionaram
					//$r = $n ^ 0.5;
					//$r = $n ^ (1/2);
			}
			
			echo "O resultado da operação solicitada foi <b>$r</b>";
			
		?>
		<br/><br/><input type="submit" value="Voltar" onclick="location.href='exercicio01.html'"/>
	</body>

</html>
