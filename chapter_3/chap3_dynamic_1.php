<?php

// chap3_dynamic_1.php

$start = microtime(true);

$x = 1;

$data = [];

$populateArray = function ($populateArray, $data, $x) {

    $data[$x] = $x;

    $x++;

    return $x <= 1000 ? $populateArray($populateArray, $data, $x) : $data;

};

$data = $populateArray($populateArray, $data, $x);

$time = microtime(true) - $start;

echo 'Time elapsed: ' . $time . PHP_EOL;

echo memory_get_usage() . ' bytes' . PHP_EOL;