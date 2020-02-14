<!doctype html>

<html>
	<head>
		<title>Estrutura de Repetição For</title>
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
			echo "<h2>Verificar se um número digitado pelo usuário é primo</h2>";
			
			$primo = isset($_GET["primo"])?$_GET["primo"]:0;
			
			$cont=0;
			echo "<h2>Analisando o número $primo</h2>";
			echo "Valores múltiplos: ";
			for($i=1; $i <= $primo; $i++){
				$res = $primo % $i;
				
				if($res==0){
					$cont++;
					echo "$i ";
				}
			}
			
			echo "</br>";
			
			if($cont==2){
				
				echo "Total de múltiplos: $cont</br>";
				echo "Resultado: <b>$primo É PRIMO</b></br>";
			}
			if($cont!=2){
				
				echo "Total de múltiplos: $cont</br>";
				echo "Resultado: <b>$primo NÃO É PRIMO</b>";
			}
			
		?>
		</br><input type="submit" value="Voltar" onclick="location.href='javascript:history.go(-1)'"/>
	</div>
	</body>

</html>
