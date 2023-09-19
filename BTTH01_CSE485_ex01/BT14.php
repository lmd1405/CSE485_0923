<?php
$array1 = [
    [77, 87],
    [23, 45]
   ];
   $array2 = [
    'giá trị 1', 'giá trị 2'
   ];
   $array3=[];
   for($i=0;$i<count($array2);$i++){
        $array3[] = array_merge($array1[$i],[$array2[$i]]) ;
    }
    print_r($array3);
?>