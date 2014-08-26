<?php

namespace Wispiring\Controller;

class Notebook extends Mysql
{

    private $id;

    public function listAction()
    {
        echo 'DDD';
    }

    public function viewAction()
    {
        $sql = "SELECT `title`,`summary` FROM `connect` WHERE id=" . $id;
        $arr[] = parent::selectRow($sql);
        foreach ($arr as $a) {
            echo '留言标题:' . $a['0'] . '<br />';
            echo '留言内容:' . $a['1'] . '<br />';
        }
    }

}
