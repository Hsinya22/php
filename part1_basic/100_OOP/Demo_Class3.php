<?php
//建構程式

$obj = new CAnimal(3);
echo "weight: ", $obj->getWeight(), "<br>";
//$obj2 = $obj;
//echo "flag 1<br>";
$obj = null;
//echo "flag 2<br>";


class CAnimal
{
	// public $weight;
	private $_weight = 0;

	function __construct($weightValue = 0) { //當出現 __construct，在建立當下會被呼叫一次
		echo "Object Created.<br>";
		$this->setWeight($weightValue); // 這樣的寫法功能比較完整
		// 還是寫成這樣: (哪一個比較好? @@" )
		// $this->_weight = $weightValue;//這寫法比較快速
	}
	
	function __destruct() {
		echo "Object destroyed.";
	}
	
	public function makeNoise()
	{
		echo "CAnimal: makeNoise";
	}
	
	public function setWeight($value)
	{
		if ($value >= 0)
			$this->_weight = $value;
	}
	
	public function getWeight()
	{
		return $this->_weight;
	}
	
}

?>
