<?php
//登出設定
if(isset($_GET["logout"])){ //檢查ＵＲＬ是否有logout參數
  // 如果有東西，設定cookie昨天到期，回到首頁就讀不到cookie
  setcookie("userName", "Guest", time()- 60*60*24);
  header("Location:index.php");
  
  exit();
}

if($_POST["btnOK"]){
  // echo "ok"; // 點擊登入，執行這段
  $userName = $_POST["txtUserName"];
  // echo $userName;
  if ($userName){
    setcookie("userName", $userName);
    // echo "Login OK";
    header("Location: index.php"); //登入成功，跳回首頁
  }
}
if($_POST["btnHome"]){
  header("Location: index.php"); //點擊回首頁，執行這段
}

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lab - Login</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="login.php"> 
  <!-- 用post朝login丟資料 -->
  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 登入</font></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">帳號</td>
      <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" /></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">密碼</td>
      <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" /></td>
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