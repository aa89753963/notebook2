<?php

namespace Wispiring\Controller;

use Wispiring\Core\AbstractController;

class NotebookController extends AbstractController
{
    public function listAction()
    {

       // $result = $this->mysql->query("SELECT * FROM notebook");

       // $this->tpl->assign('result', $result);

        $this->tpl->assign('name', 'XXXXX');
        $this->tpl->display('index.tpl');
    }

    public function viewAction()
    {
        echo "view";
    }

    public function addAction()
    {
        echo "vadddiew";
    }

    public function editAction()
    {
        echo "EDITview";
    }

    public function saveAction()
    {

    }
}
