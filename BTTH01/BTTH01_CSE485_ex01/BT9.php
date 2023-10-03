<?php
function convertToLowcase($arr){
    foreach($arr as &$ele){
        if(is_string($ele)){
            $ele = strtolower($ele);
        }
    }
    return $arr;
}
$arrs1 = ['1', 'B', 'C', 'E'];
$arrs2 = ['a', 0, null, false];
var_dump(convertToLowcase($arrs1));
echo '<br>';
var_dump(convertToLowcase($arrs2));
?>