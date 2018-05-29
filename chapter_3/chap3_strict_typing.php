<?php

// chap3_strict_typing.php

declare(strict_types = 0);

$start = microtime(true);

function test ($variable)
{
    $variable++;

    return "$variable is a test.";
}

ob_start();

for ($x = 0; $x < 1000000; $x++) {

    $array[$x] = (string) $x;

    echo test($array[$x]) . PHP_EOL;

}

$time = microtime(true) - $start;

ob_clean();

ob_end_flush();

echo 'Time elapsed: ' . $time . PHP_EOL;