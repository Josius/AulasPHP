<!doctype html>

<html>
	<head>
		<title>Rotinas em PHP - Parte 1</title>
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
			echo "<h2>Realizar uma soma com múltiplos parâmetros</h2>";
			function soma(){
			    $p = func_get_args(); //coloca todos os argumentos passados para esta função em um array
			    $t = func_num_args(); //conta a quantidade de argumentos passados para a função
			    $s = 0;
			    echo "Valores a serem somados: ";
			    for($i=0; $i< $t; $i++){
			        $s = $s + $p[$i];
//			        $s += $p[$pi]; 
                    echo "$p[$i] ";
			    }
			    return $s;
			}
			
			$r = soma(3, 5, 2, 5, 7, 8, 9,10, 13);
			echo "<br/>A soma dos valores é: $r<br/>";
			
		?>
		COLOCAR BOTÃO DE VOLTAR AQUI
	</div>
	</body>

</html>
