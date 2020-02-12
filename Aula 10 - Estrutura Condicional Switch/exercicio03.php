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
			echo "<h2>Qual estado você mora e indica a região</h2>";
			
			$est = isset($_GET["Estado"]) ? $_GET["Estado"] : 0;
			switch($est){
				case 1:
				case 2:
				case 3:
				case 4:
				case 5:
				case 6:
				case 7:
					$regiao = "Norte";
					break;
				case 8:
				case 9:
				case 10:
				case 11:
				case 12:
				case 13:
				case 14:
				case 15:
				case 16:
					$regiao = "Nordeste";
					break;
				case 17:
				case 18:
				case 19:
					$regiao = "Centro-Oeste";
					break;
				case 20:
				case 21:
				case 22:
				case 23:
					$regiao = "Sudeste";
					break;
				case 24:
				case 25:
				case 26:
					$regiao = "Sul";
					break;
				case 27:
					$regiao = "Centro-Oeste";
					break;
				default:
					echo "Região Inválida";
			}
			
			echo "Você mora na <strong>Região $regiao</strong>";
		?>
		<br/><br/><input type="submit" value="Voltar" onclick="location.href='javascript:history.go(-1)'"/>
	</body>

</html>
