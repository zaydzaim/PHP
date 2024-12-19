<?php

if (isset($argv[1])) {
    $bedrag = intval($argv[1]);

    if ($bedrag < 1) {
        echo "geen wisselgeld" . PHP_EOL;
    } else {
        $wisselgeld = wisselgeld($bedrag);
        echo "€$bedrag x 1 euro" . PHP_EOL;
    }
} else {
    echo "geen wisselgeld" . PHP_EOL;
}


function wisselgeld($bedrag)
{
    $muntgeld = floor($bedrag);
    return $muntgeld;
}

?>