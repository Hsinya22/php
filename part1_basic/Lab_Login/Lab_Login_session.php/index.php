<?php
session_start();

// $_SESSION["userName"] = $_COOKIE["userName"]?$_COOKIE["userName"] : "Guest";//這個寫法會導致在登出後，出現警告訊息，找不到userName的值
if(!isset($_SESSION["userName"])){ //檢查$_SESSION["userName"] 是否有設置，如沒設置，執行大括號裡的事項
    $_SESSION["userName"] = $_COOKIE["userName"]?$_COOKIE["userName"] : "Guest";
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lab - index</title>
</head>
<body>
<table width="300" border="0" align="center"  cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
    <td align="center" bgcolor="#CCCCCC">
        <font color="#FFFFFF">會員系統 - 首頁</font></td>
    </tr>
    <tr>
    <td align="center" valign="baseline">
    <?php if($_SESSION["userName"]== "Guest"){ ?>
        <a href="login.php">登入</a>
    <?php }else{ ?>
        <a href="login.php?logout=1">登出</a>
    <?php } ?>
    | <a href="secret.php">會員專用頁</a></td>
    </tr>
    <tr>
    <td align="center" bgcolor="#CCCCCC">Hello <?= $_SESSION["userName"]?></td>
    </tr>
</table>
    
</body>
</html>