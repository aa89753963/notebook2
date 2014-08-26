<?php 
require './vendor/autoload.php';

use Wispiring\Utils;

$page = $_GET['page'];
$action = $_GET['action'];
try {   
    $d = new Utils();
    $d-> test();exit;
    Utils::test();exit;
    Utils::router($page, $action);
} catch (Exception $e) {
    $code = $e->getCode();
    if ($code === 404) {
        header("HTTP/1.0 404 Not Found");
        echo $e->getMessage();
        exit;
    }
}
