<?php   

namespace application\controllers;

use application\core\Controller;
use application\models\BasketModel;
use application\lib\Responser;

class BasketController extends Controller {

    public function indexAction() {
        /** @var BasketModel $basket_model */
        $basket_model = $this->loadModel("basket");
        $basket_model->initUser($this->user);

        $basket = $basket_model->buildBasket();

        $this->initCategories();
        $this->view->assignByRef("basket", $basket);
        $this->view->render("Корзина");
    }

    public function addAction() {
        global $response_errors;

        if (!isset($_GET['product_id'])) Responser::ajaxErrorResponse($response_errors['product_id_empty']);
        $product_id = $_GET['product_id'];

        /** @var BasketModel $basket */
        $basket = $this->loadModel("basket");
        $basket->initUser($this->user);
        $response = $basket->addProduct($product_id);

        if ($response['status']) Responser::ajaxSuccessResponse();
        else Responser::ajaxErrorResponse($response['message']);
    }

    public function removeAction() {
        global $response_errors;

        if (!isset($_GET['product_key'])) Responser::ajaxErrorResponse($response_errors['product_key_empty']);
        $product_key = $_GET['product_key'];

        /** @var BasketModel $basket */
        $basket = $this->loadModel("basket");
        $basket->initUser($this->user);
        $basket->removeProduct($product_key);

        Responser::ajaxSuccessResponse();
    }

}