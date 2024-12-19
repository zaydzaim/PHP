<?php

echo 'Hoeveel stapels wil je hebben? ';
$stapel = intval(readline());

echo "while loop:\n";
$i = 1;
while ($i <= $stapel) {
    $k = 0;
    while ($k < $i) {
        echo "*";
        $k++;
    }
    echo PHP_EOL;
    $i++;
}

?>