<?php

// function ShowStar(){
//     echo "***";
// }

// function ShowStar($iCount){
//     echo $iCount;
// }

// ShowStar(6,2,3);

// function ShowStar($iCount){
//     $result = "";
//     for ($i = 1; $i <= $iCount; $i++){
//         // $result +="*"; //出現錯誤 無法字串加字串
//         $result .="*";
//     }
//     echo $result;
// }
// ShowStar(6);

//
// function ShowStar($iCount , $sWhat = "*"){
//     $result = "";
//     for ($i = 1; $i <= $iCount; $i++){
//         $result .= $sWhat;
//     }
//     echo $result;
// }

// ShowStar(6, "$");
// ShowStar(5);

//設計$iCount 值小於0 ，出現提示訊息
// function ShowStar($iCount , $sWhat = "*"){
//     $result = "";
//     if ($iCount>0){
//         for ($i = 1; $i <= $iCount; $i++){
//             $result .= $sWhat;
//         }
//         echo $result;
//     }
//     else {
// 		echo '$iCount >0 please';
// 	}
// }
// ShowStar(0);

// $iCount 值不能大於20 =>> if裡面再寫一個if
// function ShowStar($iCount , $sWhat = "*"){
//     if ($iCount>0){
//         if($iCount<=20){
//             $result = "";
//             for ($i = 1; $i <= $iCount; $i++){
//                 $result .= $sWhat;
//             }echo $result;
//         }
//         else{
//             echo '$iCount <21 please';
//         }
//     }
//     else {
// 		echo '$iCount >0 please';
// 	}
// }
// ShowStar(21);


////加上return
// function ShowStar($iCount, $sWhat = "*") {
//     if ($iCount <= 0){
//         echo "iCount > 0 please.";
//         return;
//     }
//     if ($iCount >21){
//         echo "iCount <= 21 please.";
//         return;
//     }
//     $result = "";
//     for ($i = 1; $i <= $iCount; $i++) {
//         $result .= $sWhat;
//     }
//     echo $result;    
//     //finally

// }
// ShowStar(15);
 
 ///錯誤示範:寫法太冗長
// function ShowStar($iCount, $sWhat = "*") {
//     if ($iCount > 0) {
//         if ($iCount <= 21) {
//             if ($iCount != 4) {
//                 $result = "";
//                 for ($i = 1; $i <= $iCount; $i++) {
//                     $result .= $sWhat;
//                 }
//                 echo $result;        
//             }
//             else {
//                 echo "iCount =/= 4 please.";
//             }
//         }
//         else {
//             echo "iCount <= 21 please.";
//         }
//     }
//     else {
//         echo "iCount > 0 please.";
//     }
// }
 
// ShowStar(2, "^");
// ShowStar(22);
 

//練習8
// function add($x , $y){
//     $result = $x + $y ;
//     return $result;
// }
// $answer = add(1,2);
// echo $answer; // 3

//練習9
// $gData = 100;

// function add($x , $y){
//     global $gData;
//     $gData = 2000;
//     echo "gData = $gData<br>";
//     $result = $x + $y ;
//     return $result;
// }
// $answer = add(1,2);
// // echo $answer; 
// echo $gData;

// 練習10 
$x = 300;
$z = ($y = $x);
echo $z;



?>