<?php

namespace Wispiring\Core\Component\Template;

class Template
{

    private $values = array();

    private $tplPath = null;

    public function __construct($tplName)
    {
        
    }

    public function loadTplFile($fileName, $extName = '.php')
    {
        $file = $this->tplPath . $fileName . $extName;

        if (!file_exists($file)) {
            throw new TplNotFoundException($file . ' Not found.');
        }

        require $file;
    }

    public function assgin($name, $value)
    {
        $this->value[$name] = $value;
    }


    public function display($name = null)
    {
        $this->loadTplFile($name);
    }
    
}