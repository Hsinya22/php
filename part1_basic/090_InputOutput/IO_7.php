<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r"); // 開檔 r = read w = write 
while (!feof($f)) // EOF 比檔案結尾更後面的地方
{
	$line = fgets($f); //讀檔案資料
	$sData .= Trim($line) . "<br>";
}
fclose($f); //關閉檔案
echo $sData;

?>
