<?php

// chap3_dynamic_4.php

$start = microtime(true);

$data = [];

function populateArray()
{
    for ($i = 1; $i <= 1000; $i++) {
        yield $i => $i;
    }

    return;
}

foreach (populateArray() as $key => $value) {
    $data[$key] = $value;
}

$time = microtime(true) - $start;

echo 'Time elapsed: ' . $time . PHP_EOL;

echo memory_get_usage() . ' bytes' . PHP_EOL;