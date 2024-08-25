<?php

$x = 3;
$y = 0;
echo "test Flag 1<hr>";
$result = $x / $y;  // Warning and go ahead.
//因為除數 $y 為 0。雖然這會產生警告，但是 PHP 會繼續執行後面的代碼，警告不會中止程序。
echo "test Flag 2<hr>";
throw new Exception("Error!!");  // Fatal error and program stop
echo "test Flag 3<hr>";
//new 一個給 Exception
?>

