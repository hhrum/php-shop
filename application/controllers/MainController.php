<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

    public function indexAction() {

        $category_model = $this->loadModel("category");

        $categories = $category_model->getCategories();

        $this->view->assignByRef("categories", $categories);
        $this->view->render("Мой магазинчик");
    }

}