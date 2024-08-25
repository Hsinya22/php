<?php
session_start();

$prompt = "";
$userName = "";
$passWord= "";

if(isset($_GET["logout"])){
    // setcookie("userName" , "Guest", time()- 60*60*24);//如果依照這個的寫法，他會無法跳轉
    $_SESSION["userName"] = "Guest";
    setcookie("userName" , $_SESSION["userName"] , time()- 60*60*24);
    header("Location: index.php");
}

if(isset($_POST["btnHome"])){
    header("Location: index.php"); //點擊回首頁，執行這段
    exit();
  }

if(isset($_POST["btnOK"])){
    if(empty($_POST["txtPassword"])){
        $userName = $_POST["txtUserName"];
        $prompt = "please keyin your password" ;
    }else{
        $_SESSION["userName"]=$_POST["txtUserName"];
        setcookie("userName" , $_SESSION["userName"]);
        header("Location:index.php");
        exit();
    }
    // echo $_SESSION["userName"];
}
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lab - Login</title>
</head>
<body>
    <?php echo $prompt ?>

    <form id="form1" name="form1" method="post" action="login.php">
    <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
        
        <tr>
        <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 登入</font></td>
        </tr>
        <tr>
            <td width="80" align="center" valign="baseline">帳號</td>
            <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" value="<?=$userName?>"/></td>
        </tr>
        <tr>
            <td width="80" align="center" valign="baseline">密碼</td>
            <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" value="<?=$passWord?>" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center" bgcolor="#CCCCCC">
                <input type="submit" name="btnOK" id="btnOK" value="登入" />
                <input type="reset" name="btnReset" id="btnReset" value="重設" />
                <input type="submit" name="btnHome" id="btnHome" value="回首頁" />
            </td>
        </tr>
        
       
    
    </table>
    </form>
    
    
</body>
</html>