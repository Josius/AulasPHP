<!doctype html>

<html>
	<head>
		<title>Funções String em PHP - Parte 1</title>
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
			echo "<h2>Print_r</h2>";
			
			$v[0] = 4;
			$v[1] = 8;
			$v[2] = 3;
			print_r($v);
			//Array ( [0] => 4 [1] => 8 [2] => 3 )
			$v2 = array (3,7,6,2,1,9.0);
			echo "</br>";
			print_r($v2);
			//Array ( [0] => 3 [1] => 7 [2] => 6 [3] => 2 [4] => 1 [5] => 9 )
			echo "</br>";
			var_dump($v2);
			//array(6) { [0]=> int(3) [1]=> int(7) [2]=> int(6) [3]=> int(2) [4]=> int(1) [5]=> float(9) }
			echo "</br>";
			var_export($v2);
			//array ( 0 => 3, 1 => 7, 2 => 6, 3 => 2, 4 => 1, 5 => 9.0, )



			
		?>
		
	</div>
	</body>

</html>
