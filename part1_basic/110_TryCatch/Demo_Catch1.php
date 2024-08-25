<?php

$x = 3;
$y = 0;
try //用這個包住可能會出錯的程式
{
	echo "test Flag 1<hr>";
	$result = $x / $y; // Warning and go ahead.
	echo "test Flag 2<hr>";
	throw new Exception("Error!!");  // Fatal error and program stop
	echo "test Flag A<hr>"; //網頁不會看這行，因為上面有問題就會跳到下面異常處理，執行裡面的內容
}
catch (Exception $err)
{
	echo "trap into CATCH block.<hr>";
	echo $err->getMessage() . "<hr>";
}
echo "test Flag 3";

//try 區塊包含了可能拋出異常的代碼。
//如果有異常拋出，catch 區塊會捕獲並處理這個異常，並顯示錯誤信息。
?>

