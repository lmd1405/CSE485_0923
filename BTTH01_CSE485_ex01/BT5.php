<?php
    $a = [
        'a' => [
        'b' => 0,
        'c' => 1
        ],
        'b' => [
        'e' => 2,
        'o' => [
        'b' => 3
        ]
        ]
    ];
    echo " giá trị = 1 mà có key là c từ mảng trên".$a['a']['c'].'<br>';

    echo " giá trị = 3 mà có key là b từ mảng".$a['b']['o']['b'].'<br>';
    $s=$a['a'];   
    echo " thông tin của phần tử có key là a: ";
    foreach($s as $s){
        echo $s." ";
    }
?>