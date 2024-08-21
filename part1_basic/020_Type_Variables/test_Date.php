<?php

// 當我們想把系統預設時間改為台灣的時間
// 編輯下列檔案:
// Loaded Configuration File  C:\xampp\php\php.ini
// 以VS code開啟檔案 C:\xampp\php\php.ini

// 找到這行
// date.timezone=Europe/Berlin

// 換成這行
// date.timezone=Asia/Taipei

// 日期陣列
  $x = getdate();
  echo gettype($x), "<br>";
  // var drum
  echo "<hr>";
  
// 取得字串
  $x = date('Y-m-d H:i:s'); 
  echo $x, "<br>";
  echo gettype($x), "<br>";
  echo "<hr>";
  
// 回傳國際標準時間
  $x = gmdate('Y-m-d H:i:s');
  echo $x, "<br>";
  echo "<hr>";
  
// 文字轉為時間戳記
  // $x = strtotime(gmdate('Y-m-d H:i:s'));
  $x = strtotime(gmdate("1970-01-01 00:00:00")); //-28800 => 跟倫敦的時差數據(以秒數去算) =>差8小時
  // $x = strtotime(gmdate("1970-01-01 08:00:00")); // 0 => 跟倫敦的時差數據(以秒數去算)
  echo $x, "<br>";
  echo gettype($x), "<br>";
  echo "<hr>";

// 時間戳記(數字)轉字串
// $x = date('Y-m-d H:i:s', 0);  // 1970-01-01 08:00:00
$x = date('Y-m-d H:i:s', 28800);  // 1970-01-01 16:00:00
$x = date('Y-m-d H:i:s');  // 沒有給值 => 伺服器當下的時間
echo $x, "<br>";
echo gettype($x), "<br>";  //string
  
?>