<?php

function printOwnCode() {
    $code = file_get_contents(__FILE__);
    echo htmlspecialchars($code);
}

function listAllFiles() {
    $files = scandir(__DIR__);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            echo $file . PHP_EOL;
        }
    }
}

function listDirectories() {
    $files = scandir(__DIR__);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && is_dir($file)) {
            echo $file . PHP_EOL;
        }
    }
}

echo "Собственный код программы:" . PHP_EOL . '<br>';
printOwnCode();
echo PHP_EOL;

echo '<br>' ."Список всех файлов в текущей директории:" . PHP_EOL . '<br>';
listAllFiles();
echo PHP_EOL;

echo '<br>' . "Список только папок в текущей директории:" . PHP_EOL . '<br>';
listDirectories();
