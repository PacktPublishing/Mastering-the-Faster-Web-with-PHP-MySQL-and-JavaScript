<?php

// chap3_string_interpolation.php

$a = str_repeat(chr(rand(48, 122)), rand(1024, 3000));

$b = str_repeat(chr(rand(48, 122)), rand(1024, 3000));

$start = microtime(true);

for ($x = 0; $x < 10000; $x++) {
    $$x = "$a is not $b";
}

$time = microtime(true) - $start;

echo 'Time elapsed: ' . $time . PHP_EOL;

echo memory_get_usage() . ' bytes' . PHP_EOL;