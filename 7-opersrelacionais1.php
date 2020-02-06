<!doctype html>

<html>
	<head>
		<title>Operadores Relacionais</title>
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
			echo "<h2>Permitir que o usuário escolha entre somar e multiplicar dois números</h2>";	
			
			$n1 = $_GET["a"];
			$n2 = $_GET["b"];
			$tipo = $_GET["op"];
			
			echo "Os valores passados foram $n1 e $n2 <br/>";
			
			$r = ($tipo == "s") ? $n1+$n2 : $n1*$n2; 
			
			echo "O resultado será $r";
			
			
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