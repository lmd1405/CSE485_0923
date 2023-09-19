<?php
        $keys = array(
            "field1"=>"first",
            "field2"=>"second",
            "field3"=>"third"
           );
           $values = array(
            "field1value"=>"dinosaur",
            "field2value"=>"pig",
            "field3value"=>"platypus"
           );
     $H = array_combine(array_values($keys), array_values($values));
    foreach($H as $H){
        echo $H." ";
    }
?>