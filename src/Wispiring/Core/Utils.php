<?php

namespace Wispiring\Core;

use Exception;

class Utils
{
    public static function router($pageName, $actionName, $params = array())
    {

        
        $pageClassName = 'Wispiring\\Controller\\' . ucfirst($pageName) . 'Controller';
        $actionName    = $actionName.'Action';

        if (!class_exists($pageClassName) || !method_exists($pageClassName, $actionName)) {
            throw new Exception(
                sprintf('Page "%s" not found', $pageName),
                404
            );
        }

        $pageClass = new $pageClassName();
        return call_user_func_array(array($pageClass, $actionName), $params);
    }
}
