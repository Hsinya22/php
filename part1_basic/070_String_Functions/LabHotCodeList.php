<?php
function readDataFromFile(){
	return "908872526535442041985072568716";
}

$sData = readDataFromFile();
$result = "01234567890";
$iLen = strlen($sData);
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);
	$result = $ch . str_replace($ch, "", $result);
	echo "$result<br>";
}
// echo $result; // 6178520943
// echo substr($result, 0, 5) . "-" . substr($result, 5, 5); // 61785-20943


?>