<!doctype html>

<html>
	<head>
		<title>Estrutura Condicional Switch</title>
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
			echo "<h2>Ler o dia da semana (2-7) e mostrar se precisa ou não ir pra escola</h2>";	
			$d = isset($_GET["ds"]) ? $_GET["ds"] : 0;
			switch ($d){
				case 2:
				case 3:
				case 4:
				case 5:
				case 6:
					echo "Levanta e vai estudar! :)";
					break;
				case 7:
				case 8:
					echo "Descanse pequeno gafanhoto! ;)";
					break;
				default:
					echo "Dia da semana inválido";
			}
		?>
		
<!--		<br/><br/><input type="submit" value="Voltar" onclick="location.href='exercicio02.html'"/> -->

			<br/><br/><input type="submit" value="Voltar" onclick="location.href='javascript:history.go(-1)'"/>

<!--		<br/><br/><a href="javascript:history.go(-1)">Voltar</a> 
			javascript:history.go(-1) significa: volta uma página no meu histórico de navegação -->
	</body>

</html>
