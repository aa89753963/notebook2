<?php

if (!file_exists('../vendor/autoload.php')) {
    echo "Plz use `php composer.phar install` to initial the project!";
    exit;
}

require '../vendor/autoload.php';

use Wispiring\Core\Utils;

define('SYSYTEM_ROOT', realpath(__DIR__ . '/../'));

$page   = isset($_GET['page']) ? $_GET['page'] : 'Default';
$action = isset($_GET['action']) ? $_GET['action'] : 'Index';

try {
    Utils::router($page, $action);
} catch (Exception $e) {
    $code = $e->getCode();
    if ($code === 404) {
        header("HTTP/1.0 404 Not Found");
        echo $e->getMessage();
        exit;
    }
}
