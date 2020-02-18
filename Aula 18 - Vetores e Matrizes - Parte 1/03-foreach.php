<!doctype html>

<html>
	<head>
		<title>Vetores e Matrizes - Parte 1</title>
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
		<pre>
			<table border="30"><tr>
		<?php
			echo "<h2>Foreach</h2>";
			
			$c = range(5,20,2);
			$c[] = 96;
			$c[] = "BD";
			foreach($c as $v){
				echo "<th> $v </th> ";
			}
			
		?>
			</table></tr>
		</pre>
		</br></br><input type="submit" value="Aqui votla" onclick="location.href='javascript:history.go(-1)'"	/>
	</div>
	</body>

</html>
