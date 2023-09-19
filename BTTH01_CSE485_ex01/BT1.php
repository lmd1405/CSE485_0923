<?php $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
$Tong=$arrs[0];
$Tich=$arrs[0];
$Hieu=$arrs[0];
(float)$Thuong = $arrs[0];
    for($i=1;$i<count($arrs);$i++){
        $Tong+=$arrs[$i];
        $Tich*=$arrs[$i];
        $Thuong/=$arrs[$i];
        $Hieu-=$arrs[$i];
    }
    echo "Tổng các phần tử: 2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 =$Tong".'<br>';
    echo "Hiệu các phần tử: 2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 =$Hieu".'<br>';
    echo "Tich các phần tử: 2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 =$Tich".'<br>';
    echo "Thương các phần tử: 2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 =".number_format($Thuong,10).'<br>';
?>