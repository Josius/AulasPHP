<!doctype html>

<html>
	<head>
		<?php
			$txt = isset($_GET["t"])? $_GET["t"] : "Texto Genérico";
			$tam = isset($_GET["tam"])? $_GET["tam"] : "12pt";
			$cor = isset($_GET["cor"])? $_GET["cor"] : "#000000";
		?>
		<title>Integração HTML5 + PHP</title>
		<meta charset="utf-8" />
		<style>
			h2{
				font: 15pt Arial;
				color: #171559;
				font-weight: bold;
			}
		</style>
		<style>
			span.texto{
				font-size: <?php echo $tam; ?>;
				color: <?php echo $cor; ?>;
			}
		</style>
	</head>

	<body>
		<?php
			echo "<h2>Permitir a personalização de um texto através de um formulário</h2>";	
			
			echo "<span class='texto'>$txt</span>";	
		?>
		<br/><a href="8-integracaohtml5php3.html">Voltar<a/>
	</body>

</html>