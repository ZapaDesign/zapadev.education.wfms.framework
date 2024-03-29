<?php

namespace app\controllers\admin;

use app\models\admin\User;
use app\models\AppModel;
use app\widgets\language\Language as WidgetLanguage;
use zpdevfrw\App;
use zpdevfrw\Controller;

class AppController extends Controller
{
    public false|string $layout = 'admin';

    public function __construct( $route )
    {
	    parent::__construct($route);

	    if(!User::isAdmin() && $route['action'] != 'login-admin'){
            redirect(ADMIN . '/user/login-admin');
	    }

	    new AppModel();
        App::$app->setProperty('languages', WidgetLanguage::getLanguages());
        App::$app->setProperty('language', WidgetLanguage::getLanguage(App::$app->getProperty('languages')));    }
}