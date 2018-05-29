<?php

// chap3_memoization_after.php

$start = microtime(true);

$x = 1;

$data = [];

function populateArray(Array $data, $x)
{
    static $cache = [];

    static $key;

    if (!isset($key)) {
        $key = md5(serialize($x));
    }

    if (!isset($cache[$key])) {

        $data[$x] = $x;

        $x++;

        $cache[$key] = $x <= 1000 ? populateArray($data, $x) : $data;

    }

    return $cache[$key];

}

$data = populateArray($data, $x);

$data = populateArray($data, $x);

$data = populateArray($data, $x);

$data = populateArray($data, $x);

$data = populateArray($data, $x);

$time = microtime(true) - $start;

echo 'Time elapsed: ' . $time . PHP_EOL;

echo memory_get_usage() . ' bytes' . PHP_EOL;