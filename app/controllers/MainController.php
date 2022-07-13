<?php

namespace app\controllers;

use app\models\Main;
use zpdevfrw\Controller;

/**
 * @property Main $model
 */

class MainController extends Controller
{
    public function indexAction()
    {
        $names = $this->model->get_names();
        $this->setMeta('Home page', 'Description', 'keywords...');
        //TODO Education: PHP function compact()
        $this->set(compact('names'));
    }
}