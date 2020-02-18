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
			echo "<h2>Substr_count</h2>";
			//substr_count conta quantas vezes a palavra procurada há na string/frase
			$frs = "Estou aprendendo PHP no Curso em Vídeo de PHP";
			$cont = substr_count($frs, "PHP");
			echo "PHP encontrado $cont vezes";
			
			
		?>
		</br></br><input type="submit" value="lá, lá, lá, lá, lá" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
