<?php

function getDiskUsage(string $directory)
{
    $handle = popen("cd $directory && du -ch --exclude='./.*'", 'r');

    $du = stream_get_contents($handle);

    pclose($handle);

    return $du;
}

function getDirList(string $directory, string &$du)
{
    $du = empty($du)
        ? '<br />' . preg_replace('/\n+/', '<br />', getDiskUsage($directory))
        : $du;

    $fileList = [];

    $iterator = new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS);

    foreach($iterator as $entry) {

        $fileName = $entry->getFilename();

        $dirFlag = $entry->isDir();

        if (!$dirFlag && $fileName[0] != '.') {
            $fileList[$fileName] = 'size is ' . $entry->getSize();
        } else {
            if ($dirFlag && $fileName[0] != '.') {
                $fileList[$fileName] = getDirList(
                    $directory . DIRECTORY_SEPARATOR . $fileName,
                    $du
                );
            }
        }

    }

    return $fileList;
}

$du = '';

$baseDirectory = dirname(__FILE__);

$fileList = getDirList($baseDirectory, $du);

echo '<html><head></head><body><p>';

echo 'Disk Usage : ' . $du . '<br /><br /><br />';

echo 'Directory Name : ' . $baseDirectory . '<br /><br />';

echo 'File listing :';

echo '</p><pre>';

print_r($fileList);

echo '</pre></body></html>';