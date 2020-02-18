<!doctype html>

<html>
	<head>
		<title>Funções String em PHP - Parte 2</title>
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
			echo "<h2>Str_replace</h2>";
			//Troca uma palavra na string por outra
			//Usar str_ireplace ignora a caixa
			$frs = "Gosto de estudar Matematica!!!Matematica é muito legal";
			$novaFrs = str_replace("Matematica", "PHP", $frs);
			echo "$novaFrs";
			//str_ireplace
			echo "</br>";
			$frs = "Gosto de estudar Matematica!!!maTemaTicA é muito legal.";
			$novaFrs = str_ireplace("matematica", "PHP", $frs);
			echo "$novaFrs";
			
			
		?>
		</br></br><input type="submit" value="E eu vou lá..." onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
