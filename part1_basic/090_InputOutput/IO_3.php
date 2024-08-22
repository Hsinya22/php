<?php
if (isset ( $_POST ["btnOK"] )) {
	// var_dump($_FILES); //查看點擊後運算的陣列 
	processFile ( $_FILES ["file1"] ); //把file1構成的陣列傳給 processFile
}
function processFile($objFile) { 
	if ($objFile ["error"] != 0) {
		echo "Upload Fail! ";
		echo "<a href='javascript:window.history.back();'>Back</a>";
		return;
	}
	
	$test = move_uploaded_file ( $objFile ["tmp_name"], "./" . $objFile ["name"] );
	echo $test; // 1 搬移了一個檔案這件事為真
	echo "<hr/>";
	if (! $test) {
		die ( "move_uploaded_file() faile" ); // 出現錯誤 程式結束
	}
	
	echo "File uploaded<br />";
	echo "File name: " . $objFile ["name"] . "<br />";
	echo "File type: " . $objFile ["type"] . "<br />";
	echo "File size: " . $objFile ["size"] . "<br />";
	
	echo "--  Done --";
	exit (); // =>正常方式 程式結束
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab - Upload file</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="">
		1. Select a file：<input type="file" name="file1" /><br /> <input
			type="submit" name="btnOK" value="2. 送出資料" />
	</form>
</body>
</html>