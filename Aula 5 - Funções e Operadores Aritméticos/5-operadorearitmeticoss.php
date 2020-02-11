<!doctype html>

<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
	</head>

	<body>
		<?php			

			echo "Com valores determinados no código";
			$n1 = 3;
			$n2 = 2;
			$s = $n1 + $n2;
			$m = $n1 + $n2 / 2;
			$mm = ($n1 + $n2) / 2;

			echo "<br/>A soma vale $s";

			//ou

			echo "<br/>A soma vale ". ($n1+$n2);
			echo "<br/>A subtração vale ". ($n1-$n2);
			echo "<br/>A multiplicação vale ". ($n1*$n2);
			echo "<br/>A divisão vale ". ($n1/$n2);
			echo "<br/>O modulo vale ". ($n1%$n2);

			echo "<br/>";

			echo "<br/>A media errada eh: $m";
			echo "<br/>A media correta eh $mm";

			//Interação com o usuário
			echo "<br/><br/>Com valores determinados pelo usuário na url (http://localhost/Ateste/operadores.php?a=5&b=8)";

			$n1 = $_GET["a"];
			$n2 = $_GET["b"];
			echo "<h2>Valores recebidos: $n1 e $n2</h2>";
			$s = $n1 + $n2;
			$m = $n1 + $n2 / 2;
			$mm = ($n1 + $n2) / 2;

			echo "A soma vale $s";

			echo "<br/>A soma vale ". ($n1+$n2);
			echo "<br/>A subtração vale ". ($n1-$n2);
			echo "<br/>A multiplicação vale ". ($n1*$n2);
			echo "<br/>A divisão vale ". ($n1/$n2);
			echo "<br/>O modulo vale ". ($n1%$n2);

			echo "<br/>";

			echo "<br/>A media errada eh: $m";
			echo "<br/>A media correta eh $mm";

		?>
	</body>

</html>




