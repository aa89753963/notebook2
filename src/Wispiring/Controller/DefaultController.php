<?php

namespace Wispiring\Controller;

use Wispiring\Core\AbstractController;


class DefaultController extends AbstractController
{
    public function indexAction()
    {
       $this->getValue('id', 'intgeger');

       $this->display('index');
    }
}