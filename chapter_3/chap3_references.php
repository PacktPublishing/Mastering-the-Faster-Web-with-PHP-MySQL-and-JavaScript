<?php

// chap3_references.php

$start = microtime(true);

function test (&$byRefVar)
{
    $test = $byRefVar;
}

$variable = array_fill(0, 10000, 'banana');

for ($x = 0; $x < 10000; $x++) {
    test($variable);
}

$time = microtime(true) - $start;

echo 'Time elapsed: ' . $time . PHP_EOL;

echo memory_get_usage() . ' bytes' . PHP_EOL;