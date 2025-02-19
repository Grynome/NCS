<?php

$directory = new RecursiveDirectoryIterator('resources/views');

$iterator = new RecursiveIteratorIterator($directory);

$regex = new RegexIterator($iterator, '/^.+\.blade\.php$/i', RecursiveRegexIterator::GET_MATCH);

foreach ($regex as $file) {
    $filePath = $file[0];

    $contents = file_get_contents($filePath);

    $updatedContents = preg_replace('/<!--.*?-->/', '', $contents);

    $updatedContents = preg_replace('/^\s*\n/m', '', $updatedContents);

    file_put_contents($filePath, $updatedContents);

    echo "Removed comments and cleaned up empty lines from: " . $filePath . PHP_EOL;
}

echo "All comments removed and empty lines cleaned from Blade files!";