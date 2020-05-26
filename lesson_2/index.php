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
		<?php
		error_reporting(E_ALL);
		ini_set('display_errors', 1);

		/**
		 * Бесконечная рекурсия
		 *
		 * @return void
		 */
		function req(){
			echo 1;
			req();
		}

		/**
		 * Ошибка в определенном моменте
		 *
		 * @param [number] $count
		 * @return void
		 */
		function deep_end ( $count ) {
			// добавляем 1 к параметру count
			$count += 1;

			if ( $count < 48 ) {
				deep_end ( $count );
			}
			else {
				trigger_error("GOING OFF THE DEEP END!");
			}
		}
		
		/**
		 * Тестовая
		 *
		 * @return void
		 */
		function test(){
			$count = 0;

			for ($i=0; $i < 20000000; $i++) { 
				$count++;
			}
		}

		//req();
		//deep_end(1);

		test();
		echo 'Скрипт выполнялся: ' . round(xdebug_time_index(), 2) . ' сек.';
		echo "<br>";
		echo "<br>";
		echo 'Использованно памяти: ' . round(xdebug_memory_usage()/1000, 2) . ' Кбайт.';
		echo "<br>";
		echo "<br>";
		echo 'Пиковое использованние памяти: ' . round(xdebug_peak_memory_usage()/1000, 2) . ' Кбайт.';
		echo "<br>";
		echo "<br>";

		?>
		
		<h3>*********************</h3>
		<h1>PHP INFO !!!</h1>
		<br>
		<?php
		phpinfo();
		?>
	</div>
</body>

</html>