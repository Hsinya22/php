<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 
echo "<pre>";
print_r($season);
echo "<pre>"; //加上，比較好看資料
echo "<hr>";
var_dump($season);
?>