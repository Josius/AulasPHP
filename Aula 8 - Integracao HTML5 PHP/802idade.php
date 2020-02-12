<!doctype html>

<html>
	<head>
		<title>Integração HTML5 + PHP</title>
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
			echo "<h2>Ler nome, ano de nascimento e sexo de uma pessoa, mostrando sua idade atual</h2>";	
			
			//'isset()' significa: foi configurado?
			$nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
			$ano = isset($_GET["ano"])?$_GET["ano"]:0;
			$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem sexo]";
			
			$idade = date("Y") - $ano;
			echo "$nome é $sexo e tem $idade anos.";
			
		?>
		<br/><a href="8-integracaohtml5php2.html">Voltar<a/>
	</body>

</html>