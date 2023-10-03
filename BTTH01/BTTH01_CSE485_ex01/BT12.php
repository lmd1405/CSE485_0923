<?php
        $numbers = [
            'key1' => 12,
            'key2' => 30,
            'key3' => 4,
            'key4' => -123,
            'key5' => 1234,
            'key6' => -12565,
           ];
    echo reset($numbers).'<br>';
    echo end($numbers).'<br>';
    echo max($numbers).'<br>';
    echo min($numbers).'<br>';
    ksort($numbers);
    var_dump($numbers);
    echo'<br>';
    krsort($numbers);
    var_dump($numbers);
    echo'<br>';
    sort($numbers);
    var_dump($numbers);
    echo'<br>';
    rsort($numbers);
    var_dump($numbers);
?>
