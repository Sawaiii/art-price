<?php
    $vari = $_GET['price'];
    $a = $vari; // Подставить первоначальное значение
    $a1 = $a /2;
    $percent = 65;
    $num_percent = $a /100 * $percent;
    $b = $a + $num_percent;
    $b1 = $b /2;
    $percent1 = 220;
    $num_percent1 = $a / 100 * $percent1;
    $c = $a + $num_percent1;
    $c1 = $c /2;
    echo "Комплект №1 - Цена первый день: " . round($a,-1) . "\r\n" . '<br>';
    echo "Комплект №1 - Цена второй день: " . round($a1,-1) . "\r\n" . '<br>';
    echo "Комплект №2 - Цена первый день: " . round($b,-1) . "\r\n" . '<br>';
    echo "Комплект №2 - Цена второй день: " . round($b1,-1) . "\r\n" . '<br>';
    echo "Комплект №3 - Цена первый день: " . round($c,-1) . "\r\n" . '<br>';
    echo "Комплект №3 - Цена второй день: " . round($c1,-1) . "\r\n" . '<br>';
?>