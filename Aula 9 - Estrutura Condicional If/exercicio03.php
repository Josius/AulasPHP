<!doctype html>

<html>
	<head>
		<title>Estrutura Condicional If</title>
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
			echo "<h2>Calcular Media do Aluno</h2>";
			
			$n1 = $_GET["n1"];
			$n2 = $_GET["n2"];
			$media = ($n1+$n2)/2;
			
			if($media <= 5){
				$resultado = "REPROVADO";
			}else if(($media>5) && ($media<=7)){
				$resultado= "RECUPERAÇÃO";
			}else{
				$resultado = "APROVADO";
			}
			
			#echo "A média entre <strong>$n1</strong> e <strong>$n2</strong> é igual a <strong>$media</strong>";
			
			
			/*echo "A média entre ". number_format($n1,1);
			echo " e ". number_format($n2,1);
			echo " é igual a ". number_format($media,1);*/
			
			//echo "A média entre <strong>$n1</strong> e <strong>$n2</strong> é igual a <strong>$media</strong>". number_format($n1, $n2, $media, 1);
			
			echo "A média entre ". number_format($n1,1). " e ". number_format($n2,1). " é igual a ". number_format($media,1);
			
			echo "<br/>Situação do aluno: <strong>$resultado</strong>";
		?>
		<br/><br/><input type="submit" value="Voltar" onclick="location.href='exercicio03.html'" />
	</body>

</html>
