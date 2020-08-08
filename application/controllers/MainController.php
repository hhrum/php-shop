<?php

namespace application\controllers;

use application\core\Controller;
use application\core\Router;
use application\models\CategoryModel;
use application\models\ProductModel;
use application\models\UserModel;
use application\lib\Responser;

/**
 * Контроллер для главной страницы
 */
class MainController extends Controller {

    public function indexAction() {
    
        /** @var CategoryModel $category_model */
        $category_model = $this->loadModel("category");
        
        $categories = $category_model->getAlCategories();

        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $user = $user_model->checkAuth();

        $order = isset($_SESSION['order']) ? $_SESSION['order'] : [];
        
        $this->view->assignByRef("user", $user);
        $this->view->assignByRef("categories", $categories);
        $this->view->assignByRef("order", $order);
        $this->view->assign("controller", $this->route['controller']);
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

        $categories = $category_model->getAlCategories();
        
        /** @var ProductModel $product_model - содержит модель управления категориями */
        $product_model = $this->loadModel("product");

        $category = $category_model->getCategory($category_id);

        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $user = $user_model->checkAuth();
        
        $this->view->assignByRef("user", $user);

        if(!$category) Router::ErrorPage(404);
        $products = $product_model->getAllProducts($category);

        $order = isset($_SESSION['order']) ? $_SESSION['order'] : [];

        $this->view->assignByRef("category", $category);
        $this->view->assignByRef("categories", $categories);
        $this->view->assignByRef("products", $products);
        $this->view->assignByRef("order", $order);
        $this->view->assign("controller", $this->route['controller']);
        $this->view->render($category->name);
    }

}