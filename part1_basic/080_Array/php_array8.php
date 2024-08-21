<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);
	var_dump($testArray);
	
	echo "<br />";
	
	natsort($testArray); //自然排序法 把數值當成數字
	var_dump($testArray);
?>
