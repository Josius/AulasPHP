<!doctype html>

<html>
	<head>
		<title>Estrutura de Repetição Do While</title>
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
			echo "<h2>Mostrar uma contagem progressiva de 1 a 10</h2>";
			$c = 1;
			do{
				echo "$c ";
				$c++;
			}while($c<=10);
			
			echo "</br>";
			
			$d=0;
			do{
				echo "$d ";
				$d +=2;
			}while($d<=20);
			
			echo "</br>";
			
			$a=10;
			do{
				echo "$a ";
				$a--;
			}while($a>=1);
		?>
		</br></br><input type="submit" value="Voltar" onclick="location.href='javascript:history.go(-1)'"/>
	</body>

</html>
