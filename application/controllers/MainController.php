<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

    public function indexAction() {
        
        d($this->model->getAllSome());

        $this->view->render("Главная страница");

    }

}