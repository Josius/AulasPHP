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
			echo "<h2>No exercicio anterior, considerar o voto opcional</h2>";	
			
			$a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
			$i = date("Y") - $a;
			echo "Você nasceu em $a e terá $i anos.<br/>";
			if($i <16){
				$tipoVoto = "não vota";
			}else if(($i>=16 && $i<18) || ($i>65)){
					$tipoVoto = "voto opcional";
			}else{
				$tipoVoto = "voto obrigatório";
			}
			echo "Para essa idade, $tipoVoto";
			
		?>
	</body>

</html>
