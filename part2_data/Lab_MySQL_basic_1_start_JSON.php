<?php
header("content-type:text/html; charset=utf-8");

// 0. 請先建立 Class 資料庫 （SetupDB/setup_class.txt）


// 1. 連接資料庫伺服器
$link = @mysqli_connect("localhost", "root", "" , null , 3306) or die(mysqli_connect_error()); // 如果or前面是true，就不會執行or後面 =>有資料才是true
// var_dump($link); //測試用=>檢查陣列

$result = mysqli_query($link, "set names utf8"); //字元集的名稱
mysqli_select_db($link, "class"); //呼叫 使用哪一個預設資料庫

// 2. 執行 SQL 敘述
$commandText = "select * from students";  //將一個 SQL 查詢指令存儲在變數 $commandText 中
$result = mysqli_query($link, $commandText); //$link：這是與 MySQL 資料庫的連接物件，由 mysqli_connect() 返回
$row = mysqli_fetch_assoc($result);

$s = json_encode($row); //編碼
echo $s;


// $row = mysqli_fetch_assoc($result);//比較推薦使用這個看陣列
// $row = mysqli_fetch_row($result); //這個也是顯示陣列，但是陣列是序號呈現
// var_dump($row); //測試用=>檢查陣列

// 3. 處理查詢結果
// while ($row = mysqli_fetch_assoc($result)) //fetch提取  assoc關聯數陣列 資料表的內容
// {
//   echo "ID：{$row['cID']}<br>";
//   echo "Name：{$row['cName']}<br>";
//   echo "<HR>";
// }

// 4. 結束連線
// mysqli_close($link);

echo "<br />-- Done --";
?>
