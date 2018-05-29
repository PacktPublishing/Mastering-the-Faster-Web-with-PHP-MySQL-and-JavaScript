<?php

// chap4_IO_non_blocking.php

$start = microtime(true);

$i = 0;

$curlHandles = [];

$responses = [];

$multiHandle = curl_multi_init();

for ($i = 0; $i < 10; $i++) {

    $curlHandles[$i] = curl_init();

    curl_setopt_array($curlHandles[$i], array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://www.google.ca',
        CURLOPT_USERAGENT => 'Faster Web cURL Request'
    ));

    curl_multi_add_handle($multiHandle, $curlHandles[$i]);
}

$running = null;

do {
    curl_multi_exec($multiHandle, $running);
} while ($running);

for ($i = 0; $i < 10; $i++) {
    curl_multi_remove_handle($multiHandle, $curlHandles[$i]);

    $responses[] = curl_multi_getcontent($curlHandles[$i]);
}

curl_multi_close($multiHandle);

$time = microtime(true) - $start;

echo 'Time elapsed: ' . $time . PHP_EOL;

echo memory_get_usage() . ' bytes' . PHP_EOL;