<?php

namespace app\controllers;

use app\models\AppModel;
use app\widgets\language\Language as WidgetLanguage;
use RedBeanPHP\R;
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
    
        $categories = R::getAssoc(
            "SELECT c.*, cd.* FROM category c JOIN category_description cd ON c.id = cd.category_id WHERE cd.language_id = ?",
            [$lang['id']]
        );
        
        App::$app->setProperty("categories_{$lang['code']}", $categories);
        
//        debug(App::$app->getProperty('languages'));
//        debug(App::$app->getProperty('language'));
    }
}