<!DOCTYPE html>
<html>
<head>

	<title>Welcome to nginx!</title>

	<style>
		div {
			margin: 0 auto;
			text-align: center;
		}
	</style>
</head>

<body>
	<div>
	<h1>Welcome to highload!</h1><br>
	<br>--------------------<br>
	<h2>Script 1</h2><br>
	<?php
		function asq($a){
			$x=$a*$a;
			$y=$a*$a*$a;
			return array($x,$y);
		}
	?>
	<pre>
	<?php	var_dump(asq(15));?>
	</pre>
	
	<br>--------------------<br>
	<h2>Script 2</h2><br>
	<?php
		function MyFunc ($a,$b,$c=0){
			$a=$b+$c;
			return $a;
		}
		echo "0 + 1 + 2 = ";
		echo MyFunc(0,1,2);
	?>
	<br>--------------------<br>
	<h2>Script 3</h2><br>
	<?php

	/**
	* +1 функция нахождения факториала.
	*/

	$n = 5;

	for ($i = 1; $i <= $n; $i++) {
			$factorial = $i * $n;
	}

	echo "Факториал 5 = ";
	echo $factorial;

	?>
	<br>--------------------<br>
	<?php
	phpinfo();
	?>

	-----------------------------------------
</div>
</body>

</html>
