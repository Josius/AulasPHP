<!doctype html>

<html>
	<head>
		<title>Funções String em PHP - Parte 2</title>
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
			echo "<h2>Str_repeat</h2>";
			//IDEAL para repetir algo sem estruturas de repetição (for, while e do-while)
			$txt = str_repeat("PHp",7);
			echo "O texto gerado foi $txt</br>";
			echo str_repeat("-",20);
			
		?>
		</br></br><input type="submit" value="Dorme então" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
