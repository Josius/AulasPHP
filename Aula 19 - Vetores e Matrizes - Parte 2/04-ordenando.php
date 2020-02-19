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
			echo "<h2>Ordenando vetores</h2>";
			
			echo "<b>ARRAY INICIAL</br></b>";
			$v = array("J","A","M","K8","ff", "a", 8, 8.9, "X");
			print_r($v);
			
			//Ordenando de forma crescente
			echo "<b></br>FUNÇÃO sort():</br></b>";
			sort($v);
			print_r($v);
			
			//Ordenando de forma decrescente/reversa
			$v = array("J","A","M","K8","ff", "a", 8, 8.9, "X");
			echo "<b></br>FUNÇÃO rsort()</br></b>";
			rsort($v);
			print_r($v);
			
			//Ordenação associativa - Organiza os itens em ordem crescente sem alterar os índices do array
			$v = array("J","A","M","K8","ff", "a", 8, 8.9, "X");
			echo "<b></br>FUNÇÃO asort()</br></b>";
			asort($v);
			print_r($v);
			
			//Ordenação associativa reversa - Organiza os itens em ordem decrescente sem alterar os índices do array
			$v = array("J","A","M","K8","ff", "a", 8, 8.9, "X");
			echo "<b></br>FUNÇÃO arsort()</br></b>";
			arsort($v);
			print_r($v);
			
			//Ordenação por chaves - Organiza os índices em ordem crescente, não se importando com a ordem dos itens dos vetor
			$v = array(2=>"J",5=>"A",0=>"M",3=>"K8",4=>"ff",6=>"a",8=>8,1=>8.9,7=>"X");
			echo "<b></br>FUNÇÃO ksort()</br></b>";
			ksort($v);
			print_r($v);
			
			//Ordenação por chaves reversa - Organiza os índices em ordem decrescente, não se importando com a ordem dos itens dos vetor
			$v = array(2=>"J",5=>"A",0=>"M",3=>"K8",4=>"ff",6=>"a",8=>8,1=>8.9,7=>"X");
			echo "<b></br>FUNÇÃO krsort()</br></b>";
			krsort($v);
			print_r($v);
			
			
		?>
		</pre>
		</br></br><input type="submit" value="Aqui volta abestado" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
