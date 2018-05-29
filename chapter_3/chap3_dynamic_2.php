<?php

// chap3_dynamic_2.php

$start = microtime(true);

$x = 1;

$data = [];

function populateArray(Array $data, $x)
{
    $data[$x] = $x;

    $x++;

    return $x <= 1000 ? populateArray($data, $x) : $data;
}

$data = populateArray($data, $x);

$time = microtime(true) - $start;

echo 'Time elapsed: ' . $time . PHP_EOL;

echo memory_get_usage() . ' bytes' . PHP_EOL;