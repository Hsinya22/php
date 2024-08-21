<?php
  header("content-type: text/html; charset=utf-8");
  $s = '許功蓋';
  echo $s."<br>";
  echo strlen($s); // 因為字符編碼是utf-8,所以算出9
?>