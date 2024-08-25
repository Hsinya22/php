<?php
 
$x = 3;
echo "*" . $x . "*<br>";
 
unset($x);
echo "*" . $x . "*<br>"; //值被清除，所以只有顯示**
 
$dataList["weight"] = 60;
echo "*" . $dataList["weight"] . "*<br>";
 
unset($dataList["weight"]);
echo "*" . $dataList["weight"] . "*<br>";
?>