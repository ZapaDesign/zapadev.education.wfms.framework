<?php

namespace app\controllers;

use zpdevfrw\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->setMeta('Home page', 'Description', 'keywords...');
//        $this->set([
//            'test' => 'TEST VAR'
//        ]);
        
//        $names = ['Bob', 'John', 'Dave'];
//        $this->set(['names' => $names]);
        //TODO Education: PHP function compact()
//        $this->set(compact($names));
    }
}