<?php

// How to resume next when error occured?
// 練習:雖然4出問題，但還可以繼續跑完，用try catch試試

// $result = "";

// for($i = 1; $i <= 9; $i++)
// {
//    foo($i);
// }

// // echo $result;

// function foo($i)
// {
// 	echo $i . "<br>";
//     global $result;

//     if ($i == 4) //在i==4設立一個炸彈，程式跑不完
//     {
//     	$err = new Exception("An Error occured");
//     	throw $err;
//     } //如果沒有這段，程式會順順跑完
    
//     $result .= "$i <br>";
// }

    $result = "";

    for($i = 1; $i <= 9; $i++)
    {
        // if(foo($i) != 200){
        //     foo($i); // =>寫這段會讓數字回傳重複的值
        // };
        foo($i);
    }
   
function foo($i)
    {
        $result = 200;
    try
    {
        echo $i . "<br>";
        global $result;

        if ($i == 4) 
        {
    	    $err = new Exception("An Error occured");
    	    throw $err;
        }

        $result .= "$i <br>";
    }
	catch (Exception $ex){
        $result = 404;
        echo $ex->getMessage(),"<br>";
    }
    return $result;
    
    
}

?>
