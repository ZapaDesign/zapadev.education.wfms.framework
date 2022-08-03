<?php

namespace app\controllers\admin;

class MainController extends AppController
{
    public function indexAction()
    {
        $title = 'Dashboard';
//        TODO admin page meta doesn't work
        $this->setMeta("Back-office :: {$title}}");
        $this->set(compact('title'));
    } 
}