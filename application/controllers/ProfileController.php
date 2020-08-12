<?php

namespace application\controllers;

use application\core\Controller;
use application\models\UserModel;
use application\lib\Responser;
use application\lib\Verify;

class ProfileController extends Controller {

    public function menuAction() {
        $this->initCategories();
        $this->initBasket();
        $this->view->render("Страница пользователя");
    }

    public function signinAction() {

        // Инициализация полей, проверка на заполненность
        global $response_errors;

        if (empty($_POST['email']) || empty($_POST['password'])) 
            Responser::ajaxErrorResponse($response_errors['input_empty']);

        $email = $_POST['email'];
        $password = $_POST['password'];

        // Проверка полей на корректность ввода
        /** @var Verify $verify */
        $verify = new Verify();
        $resultVerify = $verify->verifySigninInput($email, $password);

        if (!$resultVerify['status']) Responser::ajaxErrorResponse($resultVerify['message']);

        // Авторизация пользователя
        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $this->user = $user_model->signinUser($resultVerify['email'], $resultVerify['password']);

        if ($this->user) Responser::ajaxSuccessResponse();
        else Responser::ajaxErrorResponse($response_errors['signin_wrong']);
    }

    public function signupAction() {

        // Инициализация полей, проверка на заполненность
        global $response_errors;

        if (!isset($_POST['name']) && !isset($_POST['email']) && !isset($_POST['password1']) && !isset($_POST['password2'])) 
            Responser::ajaxErrorResponse($response_errors['input_empty']);
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        // Проверка полей на корректность ввода
        /** @var Verify $verify */
        $verify = new Verify();
        $resultVerify = $verify->verifySignupInput($name, $email, $password1, $password2);

        if (!$resultVerify['status']) Responser::ajaxErrorResponse($resultVerify['message']);

        // Регистрация пользователя
        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $signup_result = $user_model->signupUser($resultVerify['name'], $resultVerify['email'], $resultVerify['password']);

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