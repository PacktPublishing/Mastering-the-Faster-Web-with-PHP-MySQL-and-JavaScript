<?php

// chap3_immutable_arrays.php

$start = microtime(true);

for ($x = 0; $x < 10000; $x++) {
    $array[] = [
        'key1' => 'This is the first key',
        'key2' => 'This is the second key',
        'key3' => 'This is the third key',
    ];
}

echo $array[8181]['key2'] . PHP_EOL;

$time = microtime(true) - $start;

echo 'Time elapsed: ' . $time . PHP_EOL;

echo memory_get_usage() . ' bytes' . PHP_EOL;