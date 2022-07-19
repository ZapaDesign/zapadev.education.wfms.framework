<?php

namespace app\controllers;

use app\models\AppModel;
use app\widgets\language\Language as WidgetLanguage;
use zpdevfrw\App;
use zpdevfrw\Controller;
use zpdevfrw\Language;

class AppController extends Controller
{
    public function __construct($rout)
    {
        parent::__construct($rout);
        new AppModel();
        
        App::$app->setProperty('languages', WidgetLanguage::getLanguages());
        App::$app->setProperty('language', WidgetLanguage::getLanguage(App::$app->getProperty('languages')));
        
        $lang = App::$app->getProperty('language');
        Language::load($lang['code'], $this->route);
        
        
//        debug(App::$app->getProperty('languages'));
//        debug(App::$app->getProperty('language'));
    }
}