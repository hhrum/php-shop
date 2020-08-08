<?php

namespace application\controllers;

use application\core\Controller;
use application\models\UserModel;
use application\lib\Responser;
use application\lib\Verify;

class ProfileController extends Controller {

    public function menuAction() {
        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $user = $user_model->checkAuth();

        $order = isset($_SESSION['order']) ? $_SESSION['order'] : [];
        
        $this->view->assignByRef("user", $user);
        $this->view->assign("categories", false);
        $this->view->assignByRef("order", $order);
        $this->view->assign("controller", $this->route['controller']);
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
        $signin_result = $user_model->signinUser($resultVerify['email'], $resultVerify['password']);

        if ($signin_result) Responser::ajaxSuccessResponse();
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