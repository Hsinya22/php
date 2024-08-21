<?php
$a = 20;
function myFunction($b) {
	// echo "a = $a<br>";   => a = 無東西 =>函數裡面讀不到外面的全域變數
	$a = 30;
	// echo "a = $a<br>"; => a = 30
	global $a, $c; 
	// echo "a = $a<br>"; => a = 20
	return $c = ($b + $a); // 40帶入 $c= 40 + 20 = 60 and echo myFunction(40)= 60

}
// 請預測答案是多少?
echo myFunction($b); 
echo myFunction(40) + $c; // 60 + 60 = 120
echo myFunction(100)+ $c; // 測試 120 + 120 = 240
?>