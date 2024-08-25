<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );
echo gettype($lines);
echo "<hr>";
print_r($lines);
echo "<hr>";
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n"; // =>幫忙查詢網頁有沒有大於小於的符號
		//  $line  . "<br />\n"; 
}
// < 轉換成
?> 