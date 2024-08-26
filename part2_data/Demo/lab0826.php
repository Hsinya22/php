<?php
 
$s = '{"cID":"01","cName":"\u7c21\u5949\u541b","cSex":"F","cBirthday":"1987-04-04","cEmail":"elven@superstar.com","cPhone":"0922988876","cAddr":"\u53f0\u5317\u5e02\u6fdf\u6d32\u5317\u8def12\u865f"}';
 
// JSON.stringify()
// json_encode  ==> JSON  // 編碼 得到JSON字串
// json_decode() ==>解碼
// JSON.parse():
$data = json_decode($s, true);  // 解碼 是否使用關聯式陣列 要 true | 不採用false
// var_dump($data);
echo $data["cName"], "<br>"; //簡奉君
 
$data = json_decode($s, false);  // 是否使用關聯式陣列
// var_dump($data);
echo $data->cName; //簡奉君