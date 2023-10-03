<?php
function convertToUpcase($arr){
    foreach($arr as &$ele){
        if(is_string($ele)){
            $ele = strtoupper($ele);
        }
    }
    return $arr;
}
$arrs1 = ['1', 'b', 'c', 'd'];
$arrs2 = ['a', 0, null, false];
var_dump(convertToUpcase($arrs1));
echo '<br>';
var_dump(convertToUpcase($arrs2));
?>