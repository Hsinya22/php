<?php
$x = 100;
$x = 200;
echo $x; //200
echo "<br>";

$x = 100;
$y = $x;
$y = 200;
echo $x; //100 => x 不受 y 影響

$x = 100;
$y = &$x; // 把x的位置交給y，本尊x消失時，y分身會晉升為本尊，修改分身y會連動到本尊x被修改 
// & => 
$y = 200;
echo $x; //200  
echo "<br>";

$x = 100;
$y = &$x;

$y = 200;
echo "x = $x </br>";

unset($x);
echo "y = $y </br>";

?>