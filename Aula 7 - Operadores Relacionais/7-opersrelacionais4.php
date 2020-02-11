<!doctype html>

<html>
	<head>
		<title>Operadores Relacionais - Operadores Lógicos</title>
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
			echo "<h2>Mostrar se um eleitor é obrigado a votar ou não</h2>";	
			
			$ano = $_GET["an"];
			$idade = 2020 - $ano;
			
			echo "Quem nasceu em $ano tem idade de $idade anos.<br/>";
			
			$tipo = ($idade>=18 && $idade<65) ? "Obrigatório" : "NÃO OBRIGATÓRIO";
			echo "E dessa forma seu voto é $tipo";
			
		?>
	</body>

</html>

<!-- OPERADORES RELACIONAIS
		MAIOR			>
		MENOR			<
		MAIOR OU IGUAL	>=
		MENOR OU IGUAL	<=
		DIFERENTE		<>  OU  !=
		IGUAL			==		(iguais, ou seja, um $a=3; e uma $b="3"; são iguais em php, ou seja, true)
		IDENTICO		===		(do mesmo tipo e iguais, ou seja $a=3; e $b=3; para ser true, caso contrário é false)
 -->
 
 <!-- OPERADOR UNÁRIO - FORMA DE UTILIZÁ-LO
		'expressão' ? 'verdadeiro' : 'falso' 
		  $a > $b	?     $a	   :   $b
		  ou
		  $maior = $a>$b ? $a : $b
		  ou
		  $r = $a>$b ? $a+$b : $a-$b
		  ou
		  $sit = $m<7 ? "recuperacao" : "aprovado"
 -->