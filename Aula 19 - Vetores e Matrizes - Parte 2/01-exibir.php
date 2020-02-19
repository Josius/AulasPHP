<!doctype html>

<html>
	<head>
		<title>Vetores e Matrizes - Parte 1</title>
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
		<pre> <!--PRÉ FORMATAÇÃO PARA VISUALIZAR MELHOR OS VETORES-->
		<?php
			echo "<h2>Exibindo vetor</h2>";
			//print_r() server para printar qlqr obj que seja uma coleção, objs, vetores, matrizes, etc..
			//var_dump mostra a qtd de itens e o tipo de cada item no array 
			$v = array("A","J","M","X","K8","ff", 8, 8.9, true, false);
			print_r($v);
			var_dump($v);
		?>
		</pre>
		</br></br><input type="submit" value="voltar" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
