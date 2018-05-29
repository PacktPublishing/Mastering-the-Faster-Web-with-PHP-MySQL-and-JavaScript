<?php

// chap3_variables.php

$start = microtime(true);

for ($x = 0; $x < 10000; $x++) {
    $$x = 'test';
}

for ($x = 0; $x < 10000; $x++) {
    $$x = $x;
}

$time = microtime(true) - $start;

echo 'Time elapsed: ' . $time . PHP_EOL;

echo memory_get_usage() . ' bytes' . PHP_EOL;