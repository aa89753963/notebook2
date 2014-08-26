<?php

namespace Wispiring;

use Exception;

class Utils
{
    public static function router($pageName, $actionName, $idName, $params = array())
    {

        $pageClassName = 'Wispiring\\Controller\\'.ucfirst($pageName);
        $actionName    = $actionName.'Action';

        if (!class_exists($pageClassName) || !method_exists($pageClassName, $actionName) || !is_numeric($idName)) {
            throw new Exception(
                sprintf('Page "%s" not found', $pageName),
                404
            );
        }

        $pageClass = new $pageClassName();
        return call_user_func_array(array($pageClass, $actionName, $idName), $params);
    }
}
