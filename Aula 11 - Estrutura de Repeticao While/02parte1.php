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
		<h2>Criar dinamicamente 5 caixas de texto em um formulário</h2>
		<form method="get" action="02parte2.php">
			<?php
				$cont = 1;
				while($cont <= 5){
					echo "Valor $cont: <input type='number' name='v$cont' max='100' min='0' value='0'/><br/>";#Neste caso, presica usar aspas simples(ver type, name, max, min e value)
					$cont++;
				}
			?>
			<input type="submit" value="Enviar" />
		</form>
	</div>
	</body>

</html>
