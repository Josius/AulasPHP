<!doctype html>

<html>
	<head>
		<title>Operadores de Atribuição</title>
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
			echo "<h2>Praticar o uso de variáveis de variáveis</h2>";	
			
			$x = "abc"; 
			$$x = "def";
			
			//Ou seja, $x é uma variável que recebe 'abc', e $$x cria a variavel $abc referenciada pela variável anterior ($x) que recebe 'def'.
			echo "O conteúdo da variável X($-x) é: $x";
			echo "<br/>O conteúdo da variável $$-X($$-x) é: $$x";
			echo "<br/>A variável ABC criada recebeu o valor: $abc";// ($-abc acessa o valor atribuido a $$-x)
			
		?>
	</body>

</html>
