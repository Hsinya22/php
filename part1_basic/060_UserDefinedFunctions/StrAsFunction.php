<?php

function test1($i) {
	return $i + 1;
}

function test100($i) {
	return $i + 100;
}


// $x = 1;
// echo test($x);
$option = "1";
$p = "test". $option;
$x = 2;

echo $p($x);

?>