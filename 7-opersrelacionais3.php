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
			echo "<h2>Mostrar a situação de um aluno de acordo com sua média obtida</h2>";	
			$nota1 = $_GET["n1"];
			$nota2 = $_GET["n2"];
			$m = ($nota1+$nota2)/2;
			
			echo "A media entre $nota1 e $nota2 é $m <br/>";
			
			$sit = ($m<6)?"REPROVADO":"APROVADO";
			
			echo "A situação do aluno é $sit <br/>";
			//ou podemos fazer da seguinte forma:
			echo "A situação do aluno é ". (($m<6)?"REPROVADO":"APROVADO");//PRECISA COLOCAR A EXPRESSÃO ENTRE PARÊNTESES, DO CONTRÁRIO NÃO FUNCIONARÁ A FRASE CONTATENADA COM A EXPRESSÃO.
			
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