<?php
	$contents = file_get_contents('data.txt');
	echo gettype($contents);
	echo "<hr>";
	
	echo (str_replace("\r\n", "<br />", $contents));
?>