<!doctype html>

<html>
	<head>
		<title>Estrutura de Repetição While</title>
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
			echo "<h2>Criar dinamicamente 5 caixas de texto em um formulário</h2>";
			
			$i = 1;
			while($i <= 5){
				$v = "num". $i;
				$url = "v". $i;
				$$v = isset($_GET[$url]) ? $_GET[$url] : 0;
				$i++;
			}
			
			//echo "$num1 $num2 $num3 $num4 $num5"

			$i=1;
			while($i<=5){
				$v="num".$i;
				echo "Valor $i : ". $$v . "<br/>";
				$i++;
			}
			
		?>
		COLOCAR BOTÃO DE VOLTAR AQUI
	</div>
	</body>

</html>
