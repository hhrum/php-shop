<?php

namespace application\controllers;

use application\core\Controller;
use application\core\Router;
use application\models\CategoryModel;
use application\models\ProductModel;
use application\models\UserModel;

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
        
        $this->view->assignByRef("user", $user);
        $this->view->assignByRef("categories", $categories);
        $this->view->render("Мой магазинчик");
    }

    public function signinAction() {
        if (!isset($_POST['email']) && !isset($_POST['password'])) Router::ErrorPage(404);

        $email = $_POST['email'];
        $password = $_POST['password'];

        # Здесь должна быть проверка полученных данных

        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $signin_result = $user_model->signinUser($email, $password);

        echo $signin_result ? "true" : "false";
    }

    public function signupAction() {
        if (!isset($_POST['name']) && !isset($_POST['email']) && !isset($_POST['password1']) && !isset($_POST['password2'])) Router::ErrorPage(404);
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password1'];

        # Здесь должна быть проверка полученных данных

        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $signup_result = $user_model->signupUser($name, $email, $password);

        echo $signup_result ? "true" : "false";
    }

    public function categoryAction() {
        if(empty($_GET) || !isset($_GET['category_id'])) {
            global $main_config;
            Router::redirect($main_config['url']);
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

        $this->view->assignByRef("category", $category);
        $this->view->assignByRef("categories", $categories);
        $this->view->assignByRef("products", $products);
        $this->view->render($category->name);
    }

}