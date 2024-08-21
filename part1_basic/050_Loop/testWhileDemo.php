<?php

// 1 + 2 + 3
// for 迴圈
// $result = 0;
// for ($i = 1; $i <= 3; $i++){
//     $result = $result + $i;
// }
// echo $result;
// echo "<hr>";

$result = 0;
for ($i = 1; $i <= 10; $i++) {
    if ($i == 4) {
        // continue;
        break;
    }
    echo $i, "<br />";
    $result = $result + $i;
}
echo $result;

echo "<hr/>";

$result = 0;
$i = 1;
while ($i <= 10) {
    if ($i == 4) {
        $i += 1;
        // continue;
        break;
    }
    echo $i, "<br />";
    $result = $result + $i;
    $i += 1;
}
echo $result;
echo "<hr/>";



// if 迴圈
// $result = 0;
// $i = 1;
// if ($i <= 3){
//     echo $i , "<br>";// 1 2 3
//     $i += 1; //也可寫i++
    
// }
// echo $result

// while 迴圈
// $result = 0;
// $i = 1;
// while ($i <= 3){
//     $result = $result + $i;
//     $i += 1; //也可寫i++
// }
// echo $result;
// echo "<hr>";

// 1 + 2 + 3 + .....+ 100
// 100 + 99 + 98 + ... +
// 101 + 101 + 101
// (1 + 100)*100 / 2

// 
// $result = 0;
// $i = 0;
// while ($i < 3){
//     $i += 1; // 準備階段
//     $result = $result + $i; //作業階段
// }
// echo $result;


// 當你不會寫迴圈時
// $result = 0;
// $result = $result + 1;
// $result = $result + 2; // 1 + 2
// $result = $result + 3; // 3(=1+2) + 3

?>