<?php

namespace application\core;

use application\lib\Responser;
use application\core\SmartyTemplate;
use application\models\BasketModel;

/*

    //

*/

abstract class Controller extends Responser {

    public $route;
    public $view;
    public $user;

    public function __construct($route) {

        $this->route = $route;
        $this->view = new SmartyTemplate($route);
        $this->initUser();

    }

    public function loadModel($name) {

        $path = 'application\models\\'.ucfirst($name).'Model';
		if (class_exists($path)) {
			return new $path;
        }
        
    }

    /**
     * Стандартная инициализация информации о пользователе в шаблонизатор
     */
    protected function initUser() {

        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $user = $user_model->checkAuth();
        $this->user = $user;
        $this->view->assignByRef("user", $user);

    }

    /**
     * Стандартная инициализация списка категорий в шаблонизатор
     */
    protected function initCategories() {

        /** @var CategoryModel $category_model */
        $category_model = $this->loadModel("category");
        $categories = $category_model->getAlCategories();
        $this->view->assignByRef("categories", $categories);

    }

    /**
     * Стандартная инициализация корзины в шаблонизатор
     */
    protected function initBasket() {
        $basket_model = new BasketModel();
        $basket_model->initUser($this->user);
        $basket = $basket_model->getProductsId();
        $this->view->assignByRef("basket", $basket);
    }

}