<?php

namespace application\controllers;

use application\core\Controller;
use application\core\Router;
use application\models\CategoryModel;
use application\models\ProductModel;
use application\models\UserModel;
use application\models\OrderModel;
use application\lib\Responser;

/**
 * Контроллер для главной страницы
 */
class MainController extends Controller {

    public function indexAction() {
        $this->initCategories();
        $this->initBasket();
        $this->view->render("Мой магазинчик");
    }

    public function categoryAction() {
        if(empty($_GET) || !isset($_GET['category_id'])) {
            global $main_config;
            Responser::redirectResponse($main_config['url']);
        }
        $category_id = $_GET['category_id'];

        /** @var CategoryModel $category_model - содержит модель управления категориями */
        $category_model = $this->loadModel("category");
        $category = $category_model->getCategory($category_id);
        
        /** @var ProductModel $product_model - содержит модель управления категориями */
        $product_model = $this->loadModel("product");

        if(!$category) Router::ErrorPage(404);
        $products = $product_model->getAllProducts($category);

        $this->view->assignByRef("category", $category);
        $this->view->assignByRef("products", $products);
        $this->initCategories();
        $this->initBasket();
        $this->view->render($category->name);
    }

}