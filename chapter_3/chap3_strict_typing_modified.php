<?php

// chap3_strict_typing_modified.php

declare(strict_types = 1);

$start = microtime(true);

function test (int $variable) : string
{
    $variable++;

    return $variable . ' is a test.';
}

ob_start();

for ($x = 0; $x < 1000000; $x++) {

    $array[$x] = (int) $x;

    echo test($array[$x]) . PHP_EOL;

}

$time = microtime(true) - $start;

ob_clean();

ob_end_flush();

echo 'Time elapsed: ' . $time . PHP_EOL;