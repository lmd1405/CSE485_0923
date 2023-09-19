<?php
 $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
 echo"các số từ 100 đến 200 và chia hết cho 5: ";
 foreach($array as $val){
    if($val>=100&&$val<=200&&$val%5==0){
        echo $val." ";
    }
 }
 ?>