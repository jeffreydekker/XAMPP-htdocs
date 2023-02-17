<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader ($className) {
    $path = 'classes/';
    $ext = '.class.php';
    $fileName = $path . $className . $ext;

    if (!file_exists($fileName)) {
        return false;
    }

    include_once $path . $className . $ext;
}