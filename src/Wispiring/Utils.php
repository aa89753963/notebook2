<?php 
namespace Wispiring;

use Exception;

class Utils
{
    public function test()
    {
        echo 'dd';
    }

    public static function router($pageName, $actionName, $params = array())
    {
       echo $actionName;exit;
        $pageClassName = 'Wispiring\\Controller\\' . ucfirst($pageName);
        $actionName        = $actionName . 'Action';
        if  (!class_exists($pageClassName) || !method_exists($pageClassName, $actionName))  {
            throw new Exception(
                sprintf('Page "$s" not found', $pageName),
                404
                );
        }
        $pageClass = new $pageClassName();
        return call_user_func_array(array($pageClass, $actionName),  $params) ;
}