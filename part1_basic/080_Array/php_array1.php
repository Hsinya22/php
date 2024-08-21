<?php
$bloodType[] = 'A';
$bloodType[] = 'B';
$bloodType[] = 'AB';
$bloodType[] = 'O';

$bloodType[1] = 'B2';

for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}
?>