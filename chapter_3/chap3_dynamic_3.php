<?php

// chap3_dynamic_3.php

$start = microtime(true);

$data = [];

function populateArray(Array $data)
{
    static $x = 1;

    $data[$x] = $x;

    $x++;

    return $data;
}

for ($x = 1; $x <= 1000; $x++) {
    $data = populateArray($data);
}

$time = microtime(true) - $start;

echo 'Time elapsed: ' . $time . PHP_EOL;

echo memory_get_usage() . ' bytes' . PHP_EOL;