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
			echo "<h2>Stripos</h2>";
			//O 'i' de stripos() é de 'ignore', ou seja, ele ignora a caixa alta/baixa do que é procurado, como abaixo
			$frs = "Estou aprendendo PHP";
			$ipos = stripos($frs, "aprenDendo");
			echo "$frs</br> A string foi encontrada na posição $ipos"; 
			
		?>
		</br></br><input type="submit" value="vol" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
