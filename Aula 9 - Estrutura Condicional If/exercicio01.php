<!doctype html>

<html>
	<head>
		<title>Estrutura Condicional If</title>
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
			echo "<h2>Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir</h2>";	
			
			$a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
			$i = date("Y") - $a;
			echo "Você nasceu em $a e terá $i anos.<br/>";
			if($i >= 18){
				$v = "já pode votar";
				$d = "já pode dirigir";
			}else{
				$v = "não pode votar";
				$d = "não pode dirigir";
			}
			echo "Com essa idade voce $v e também $d";
		?>
	</body>

</html>
