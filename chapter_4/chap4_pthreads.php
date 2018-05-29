<?php

// chap4_pthreads.php

$start = microtime(true);

class TestThreads extends Thread {

    protected $arg;

    public function __construct($arg) {
        $this->arg = $arg;
    }

    public function run() {
        if ($this->arg) {
            $sleep = mt_rand(1, 10);
            printf('%s: %s  -start -sleeps %d' . "\n", date("g:i:sa"), $this->arg, $sleep);
            sleep($sleep);
            printf('%s: %s  -finish' . "\n", date("g:i:sa"), $this->arg);
        }
    }
}

$stack = array();

// Create Multiple Thread
foreach ( range('1', '9') as $id ) {
    $stack[] = new TestThreads($id);
}

// Execute threads
foreach ( $stack as $thread ) {
    $thread->start();
}

sleep(1);

$time = microtime(true) - $start;

echo 'Time elapsed: ' . $time . PHP_EOL;

echo memory_get_usage() . ' bytes' . PHP_EOL;