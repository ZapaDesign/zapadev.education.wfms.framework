<?php

namespace app\models;

use RedBeanPHP\R;

class Category extends AppModel
{
    public function get_category($slug, $lang): array
    {
        return R::getRow(
            "SELECT c.*, cd.* FROM category c JOIN category_description cd on c.id = cd.category_id WHERE c.slug = ? AND cd.language_id = ?",
            [$slug, $lang['id']]
        );
    }
}