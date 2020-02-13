<!doctype html>

<html>
	<head>
		<title>Estrutura de Repetição For</title>
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
		<form method="get" action="tabuadadoguanabara02.php">
			<select name="num">
				<?php
					//echo "<h2>Exibir a tabuada de um número escolhido pelo usuário, de 1 a 10</h2>";
				
					for($c=1; $c<=10; $c++){
						echo "<option>$c</option>";
					}			
				?>
			</select>
			<input type="submit" value="Tabuada"/>
		</form>
		
	</div>
	</body>

</html>
