<?php

// chap4_IO_blocking.php

$start = microtime(true);

$i = 0;

$responses = [];

while ($i < 10) {

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://www.google.ca',
        CURLOPT_USERAGENT => 'Faster Web cURL Request'
    ));

    $responses[] = curl_exec($curl);

    curl_close($curl);

    $i++;
}

$time = microtime(true) - $start;

echo 'Time elapsed: ' . $time . PHP_EOL;

echo memory_get_usage() . ' bytes' . PHP_EOL;