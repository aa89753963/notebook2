<?php

require './vendor/autoload.php';

use Wispiring\Utils;

$page   = $_GET['page'];
$action = $_GET['action'];
$id        = $_GET['id'];

try {
    Utils::router($page, $action, $id);
} catch (Exception $e) {
    $code = $e->getCode();
    if ($code === 404) {
        header("HTTP/1.0 404 Not Found");
        echo $e->getMessage();
        exit;
    }
}
