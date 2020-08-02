<?php

namespace application\controllers;

use application\core\Controller;
use application\core\Router;
use application\models\CategoryModel;

class MainController extends Controller {

    public function indexAction() {

        /** @var CategoryModel $category_model */
        $category_model = $this->loadModel("category");
        
        $categories = $category_model->getAlCategories();

        $this->view->assignByRef("categories", $categories);
        $this->view->render("Мой магазинчик");
    }

    public function categoryAction() {
        if(empty($_GET) || !isset($_GET['category_id'])) {
            global $main_config;
            Router::redirect($main_config['url']);
        }
        $category_id = $_GET['category_id'];

        /** @var CategoryModel $category_model */
        $category_model = $this->loadModel("category");

        $categories = $category_model->getAlCategories();
        $category = $category_model->getCategory($category_id);

        if(!$category) Router::ErrorPage(404);

        $this->view->assignByRef("category", $category);
        $this->view->assignByRef("categories", $categories);
        $this->view->render($category->getName());
    }

}