<?php

namespace app\controllers\admin;

use app\models\admin\User;

/**
 * @property User $model
 */
class UserController extends AppController
{
    public function loginAdminAction()
    {
        if ($this->model::isAdmin()) {
            redirect(ADMIN);
        }

        $this->layout = 'login';

        if(!empty($_POST)){

            if($this->model->login(true)) {
                $_SESSION['success'] = 'Successful authorization';
            } else {
                $_SESSION['errors'] = 'Admin login/password is not correct';
            }

            if ($this->model::isAdmin()) {
                redirect(ADMIN);
            } else {
                redirect();
            }
        }
    }

    public function logoutAction()
    {
        if ($this->model::isAdmin()) {
            unset($_SESSION['user']);
        }
        redirect(ADMIN.'/user/login-admin');
    }
}