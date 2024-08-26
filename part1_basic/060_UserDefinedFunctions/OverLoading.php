<?php
// overload  覆載/多載
// override  覆寫

function calcTotal(){
	$args = func_get_args();
	$total = 0;
	foreach($args as $value){
		$total += $value;
	}
	return $total;
}
echo calcTotal(10, 20 ,30);


// echo MathTool::calcTotal(1, 2, 3, 4, 5);
// class MathTool {
// 	static function calcTotal () {
// 		$args = func_get_args();
// 		// var_dump($args);
// 		$total = 0;
// 		foreach ($args as $value) {
// 			$total += $value;
// 		}
// 		return $total;
// 	}
// }

?>
