<?php

function convertToSeconds($inputString)
{
    $tijden = ['d' => 86400, 'u' => 3600, 'm' => 60, 's' => 1];
    $tijd = substr($inputString, -1);
    $number = intval(substr($inputString, 0, -1));
    return isset($tijden[$tijd]) ? $number * $tijden[$tijd] : null;
}


if (count($argv) != 2) {
    exit(1);
}

$input = $argv[1];
$seconds = convertToSeconds($input);
if ($seconds !== null) {
    echo $input . " komt overeen met " . $seconds . " seconden.\n";
} else {
    echo "Ongeldige invoer. Gebruik het juiste formaat: <getal>d, <getal>u, <getal>m, <getal>s.\n";
}
?>
