<?php

namespace application\controllers;

use application\core\Controller;
use application\models\UserModel;
use application\models\OrderModel;
use application\models\ProductModel;
use application\lib\Responser;
use application\lib\Verify;

class ProfileController extends Controller {

    public function menuAction() {
        $this->initCategories();
        $this->initOrder();
        $this->view->render("Страница пользователя");
    }

    public function signinAction() {
        global $response_errors;

        if (empty($_POST['email']) || empty($_POST['password'])) 
            Responser::ajaxErrorResponse($response_errors['input_empty']);

        $email = $_POST['email'];
        $password = $_POST['password'];

        /** @var Verify $verify */
        $verify = new Verify();
        $resultVerify = $verify->verifySigninInput($email, $password);

        if (!$resultVerify['status']) Responser::ajaxErrorResponse($resultVerify['message']);

        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $this->user = $user_model->signinUser($resultVerify['email'], $resultVerify['password']);

        if ($this->user) {
            /** @var OrderModel $order_model */
            $order_model = $this->loadModel("order");
            $products = $order_model->getOrderFromSession();

            /** @var ProductModel $product_model */
            $product_model = $this->loadModel("product");
            $products = $product_model->getProductsByListId($products);

            $order_model->fromSessionToUser($this->user, $products);

            Responser::ajaxSuccessResponse();
        }
        else Responser::ajaxErrorResponse($response_errors['signin_wrong']);
    }

    public function signupAction() {
        global $response_errors;

        if (!isset($_POST['name']) && !isset($_POST['email']) && !isset($_POST['password1']) && !isset($_POST['password2'])) 
            Responser::ajaxErrorResponse($response_errors['input_empty']);
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password1'];

        # Здесь должна быть проверка полученных данных

        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $signup_result = $user_model->signupUser($name, $email, $password);

        echo $signup_result ? "true" : "false";
    }

    public function signoutAction() {
        global $main_config;

        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $user_model->signoutUser();

        Responser::redirectResponse($main_config['url']);
    }
}