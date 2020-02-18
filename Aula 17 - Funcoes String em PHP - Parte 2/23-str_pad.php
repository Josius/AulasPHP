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
			echo "<h2>str_pad</h2>";
			//str_pad tenta uma string caber em um determinado espaço
			//não usa mais STR_PAD_CENTER; ao invés disso, agora é STR_PAD_BOTH
			//aparentemente, se usa " " para deixar espaço antes, após e ambos os lados, não funciona, precisa de um caractere
			$nome = "Josimar";
			$novo = str_pad($nome, 30, "*", STR_PAD_RIGHT);
			echo "Este é o nome $novo do usuário";
			$nov = str_pad($nome, 30, " :D ", STR_PAD_BOTH);
			echo "</br>Este é o nome $nov do usuário";
			$no = str_pad($nome, 30, "-c-", STR_PAD_LEFT);
			echo "</br>Este é o nome $no do usuário";
			
		?>
		</br></br><input type="submit" value="Sono" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
