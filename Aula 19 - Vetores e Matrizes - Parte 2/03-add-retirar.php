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
		<pre>
		<?php
			echo "<h2>Adicionando e excluindo itens no vetor</h2>";
			
			$v = array("A","J","M","X","K8","ff", 8, 8.9, true, false);
			print_r($v);
			
			//Adicionar um novo elemento após o último elemento do vetor
			$v[] = "O";
			print_r($v);
			
			//Adicionar/Retirar um novo elemento após o último elemento do vetor com uma função específica para tratamento de estrutura de dados em PHP - PILHA - LIFO (Last In, First Out)
			//Adicionar
			array_push($v, "OO");
			print_r($v);
			//Retirar
			array_pop($v);
			print_r($v);
			
			//Adicionar/Retirar um novo elemento antes do primeiro elemento do vetor com uma função específica para tratamento de estrutura de dados em PHP
			//Adicionar
			array_unshift($v, "NN");
			print_r($v);
			//Retirar
			array_shift($v);
			print_r($v);
			
			
			
		?>
		</pre>
		</br></br><input type="submit" value="Aqui volta abestado" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
