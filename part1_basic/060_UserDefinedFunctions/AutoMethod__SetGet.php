<?php

$obj = new CTest();
$obj->firstName = "Jeremy";
$name = $obj->firstName;
echo "<hr>";
echo $name;


class CTest {

	private $_dataBag = array();
	
	public function __set($varName, $varValue)
	{
		echo "__set<br>";
		echo $varName, ": ", $varValue, "<br>";
		$this->_dataBag[$varName] = $varValue; //用陣列記住額外加的東西
	}

	public function __get($varName)
	{
		echo "__get<br>";
		echo $varName, "<br>";
		return $this->_dataBag[$varName];
	}
		
}


?>
