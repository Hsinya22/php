<?php

$x = "ABC";
$y = "AB";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";

// 比較第一個字元，第一個字元比完就不會比後面的
$x = "ABC";
$y = "BA";  
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";

// 當兩個字串內容可轉為數字的話，他們會以數字做比較
$x = "123";
$y = "12";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";

$x = "123";
$y = "21";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";

/*

字串3 大於 字串18 =>在php不會遇到這個狀況

*/
		
		
?>