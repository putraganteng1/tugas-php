<?php
    $a = 5;
    $b = '5';

    var_dump($a == $b);
    echo "<hr/>";

    $a = 5;
    $b = '5';
    var_dump($a === $b);
    echo "<hr/>";
    
    $a = 5;
    $b = 6;
    var_dump($a != $b);
    echo "<hr/>";

    $a = 5;
    $b = '5';
    var_dump($a !== $b);
    echo "<hr/>";

    $a = 10;
    $b = 5;
    var_dump($a > $b);
    echo "<hr/>";
    
    $a = 3;
    $b = 7;
    var_dump($a < $b);
    echo "<hr/>";
    
    $a = 5;
    $b = 5;
    var_dump($a >= $b);
    echo "<hr/>";

    $a = 4;
    $b = 5;
    var_dump($a <= $b);
    echo "<hr/>";
    
?>
