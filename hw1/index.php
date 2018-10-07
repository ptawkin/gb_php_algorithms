<?php

// Создаем новый объект DirectoryIterator
$root = "finder";
$path = "";

if (isset($_GET["path"])) {
    $path = $_GET["path"];
}

$dir = new DirectoryIterator($root . '/' . $path);
// Цикл по содержанию директории

foreach ($dir as $item) {
    if ($path != '' || !($item -> isDot())) {
        if ($item -> isDir()) {
            echo "<a href='./?path=".htmlentities(urlencode($path.'/'.$item))."'>" . $item . "</a><br>";
        } else {
            echo $item . "<br>";
        }
    }
}

//обработать возможные ошибки в путях