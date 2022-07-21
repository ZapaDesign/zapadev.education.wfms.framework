<?php

namespace app\controllers;

use app\models\Breadcrumbs;
use app\models\Category;
use zpdevfrw\App;

/**
 * @property Category $model
 */

class CategoryController extends AppController
{
    public function viewAction()
    {
        $lang = App::$app->getProperty('language');
        $category = $this->model->get_category($this->route['slug'], $lang);

        if (!$category) {
            $this->error_404();
            return;
        }

        $breadcrumbs = Breadcrumbs::getBreadcrumbs($category['id']);

    }
}