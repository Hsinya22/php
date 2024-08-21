<?php 
phpinfo();

// 找Loaded Configuration File //C:\xampp\php\php.ini
// mac要另外去找位置在哪

// 以VS code開啟檔案 C:\xampp\php\php.ini

// 當我們想把系統的警告訊息關掉時(初學者可以使用，但未來開發網站還是不要關)

// 找到這行
// error_reporting=E_ALL & ~E_DEPRECATED & ~E_STRICT

// 換成這行
// error_reporting=E_ERROR

// 重新啟動appach

// 警告訊息不會出來
// 出現嚴重錯誤才會跳出訊息

// display_error = on =>預設值error 錯誤要打開
?>