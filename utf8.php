<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Проблемы которые есть с обработкой UTF-8 в PHP</title>
  <meta charset='utf-8'>
</head>
<body>
<?php
  $z = "IT TV";
  echo "{$z[2]}<br />";
  $z = "Привет ПРОГРАМИСТЫ!";
  echo "{$z[2]}<br />";
?>
</body>
</html>
