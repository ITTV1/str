<?php
//php.ini
//mbstring.func_overload
# Происходит подсчет количества символов в строке  и байтов
  $html = "Привет, ПРОГРАМИСТЫ!";
  echo "В строке пхп кода &quot;$html&quot; ".strlen($html)." символов<br />"; //
  echo "В строке пхп кода &quot;$html&quot; ".mb_strlen($html)." байт<br />"; //
?>
