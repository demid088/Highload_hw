<?php

// создаем и подключаемся к Redis
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

// подключаемся к MySQL
$mysql = mysqli_connect('localhost', 'root', '\\', 'skytech');

// проверяем соединение
if ($mysql == false){
  print("Ошибка: Невозможно подключиться к MySQL: " . mysqli_connect_error());
}

// кодировка
mysqli_set_charset($mysql, "utf8");

//--------------------------------------------------------------------
// замеряем время запроса с кэшем и без
$benchmarkCache = microtime(true);
$benchmark = microtime(true);

$result = null; // результат

// запрос + md5
$sql = 'SELECT * FROM b_sale_basket LIMIT 100000'; //365354
$md5sql = md5($sql);

// проверяем кэш
if ($redis->exists($md5sql)) {
  $result = $redis->get($md5sql);
  echo 'Получили данные из КЭШа!';
  echo '<br>ВРЕМЯ:<br>';
  echo round(microtime(true) - $benchmarkCache, 5);
  echo '<br>';
} else {
  $result = mysqli_query($mysql, $sql);
  echo 'Получили данные из Базы Данных!';
  // записываешь в КЭШ
  $redis->set($md5sql, $result);
  echo '<br>ВРЕМЯ:<br>';
  echo round(microtime(true) - $benchmark, 5);
  echo '<br>';
}
