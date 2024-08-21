<?php
// 介紹substr()
// $s = "0123456789";
// //       3
// //       ^^
// $result = substr($s, 3, 2);
// echo $result;

// 介紹strpos()
// $s = "0123abc567";
// $position = strpos($s, "abc");
// echo $position, "<br>", gettype($position);

// 為何會無法找到??
// $s = "0123abc567";
// $position = strpos($s, "012");
// echo $position, "<br>", // 0 =>第0個位置找到012
// gettype($position), "<br>";  // integer（整數）
// if ($position) { // ????????
//     echo "found";
// }
// else {
//     echo "not found";
// }

// 因為0字元在php程式裡是false =>所以誤判為找不到
// ==>所以條件設定要寫成 不完全等於false
// $s = "0123abc567";
// $position = strpos($s, "012");
// echo $position, "<br>", 
// gettype($position), "<br>"; 
// if ($position !== false) { 
//     echo "found";
// }
// else {
//     echo "not found";
// }

// str_replace()
// $s = "123abc456abc789";
// $result = str_replace("abc", "-", $s);  // 123-456-789
// echo $result;

///如何把數字3轉為0003?
// $n = 3;
// echo strlen($n);
// $result = "0003";
// echo $result;
// strpos, strlen, substr , str_replace
$n = 3;
$result = substr(strval($n + 10000), 1,4);
echo $result; // 0003

?>