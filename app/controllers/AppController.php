<?php

namespace app\controllers;

use app\models\AppModel;
use app\widgets\language\Language;
use zpdevfrw\App;
use zpdevfrw\Controller;

class AppController extends Controller
{
    public function __construct($rout)
    {
        parent::__construct($rout);
        new AppModel();
        
        App::$app->setProperty('languages', Language::getLanguages());
        App::$app->setProperty('language', Language::getLanguage(App::$app->getProperty('languages')));
        
//        debug(App::$app->getProperty('languages'));
//        debug(App::$app->getProperty('language'));
    }
}