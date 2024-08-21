<?php
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    // return $b - $a; //遞減排序
    return $a - $b;
    // return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp"); //使用者自定排序
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}

?>