<?php 
session_start();

$prompt = "";
$userName = "";
$email= "";
// echo "*" . $_POST["btnOK"] . "*";
if ($_POST["btnOK"]){
    // echo $_POST["txtUserName"];
    if($_POST["txtUserName"] == ""){
        $email = $_POST["txtEmail"];
        $prompt = "please keyin your name" ;
    }
    else{
        $_SESSION["userName"] = $_POST["txtUserName"];
        header("location: hello.php");
    }
}
else{
    echo "greeting"; //這裡是點擊進網站的初始字樣
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
        Your name:<input type="text" name="txtUserName" id="txt1" value="<?=$userName?>"><br>
        Email: <input type="text" name="txtEmail" value="<?= $email ?>"><br>
        <input type="submit" name="btnOK" value="OK">
        <?= echo $prompt="" ?>
    </form>
</body>
</html>