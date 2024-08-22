<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "line1\nline2\nLine3\n"; //a ,b c
$dataArray = explode("\n", $sData);
// var_dump($dataArray); //=>用於看陣列
// exit();

$f = fopen("data2.txt", "w");
foreach ($dataArray as $line) {
	fputs($f, $line . "\n", strlen($line) + 1);
}
fclose($f);
echo "-- Done --"

?>
