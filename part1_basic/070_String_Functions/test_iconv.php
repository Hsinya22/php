<?php
  // header("content-type: text/html; charset=utf-8");
  header("content-type: text/html; charset=big5");
  $s = "許功蓋";
  echo $s,"<br>";
  // echo strlen($s), ", ";  // 9 
  echo strlen(iconv("UTF-8", "big5", $s));
  echo "<HR>";
  echo iconv("UTF-8", "big5", $s); //將 變數 $s 的字串編碼由 UTF-8 轉為 big5
?>
