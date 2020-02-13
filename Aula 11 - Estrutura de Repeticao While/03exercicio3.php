<!doctype html>

<html>
	<head>
		<title>Estrutura de Repetição While</title>
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
			echo "<h2>Criar um contador personalizável</h2>";
			
			$ini = $_GET["ini"];
			$fin = $_GET["fin"];
			$inc = $_GET["inc"];
			
			if($ini < $fin){
				while($ini <= $fin){
					echo $ini. " ";
					$ini += $inc;
				}
			}else if($ini > $fin){
				while($ini >= $fin){
					echo $ini. " ";
					$ini -= $inc;
				}
			}else{
				echo "Dados inválidos";
			}
			
			
		?>
		<br/><br/><input type="submit" value="Voltar" onclick="location.href='javascript:history.go(-1)'"/>
	</body>

</html>
