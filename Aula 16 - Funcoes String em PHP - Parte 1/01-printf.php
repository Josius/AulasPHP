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
			echo "<h2>Printf</h2>";
			
			$p = "Leite";
			$pr = 4.5;
			
			echo "O $p custa R$ ". number_format($pr, 2);
			echo "</br></br>";
			printf ("</br>O %s custa R$ %.2f", $p, $pr);
			/*
			USOS MAIS USADOS DO PRINTF
			
			%d - valor decimal(+ ou -)
			%u - valor decimal sem sinal(apenas +)
			%f - valor real
			%s - string
			
			*/
		?>
		</br><input type="submit" value="Voltar" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
