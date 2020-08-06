<?php

namespace application\controllers;

use application\core\Controller;
use application\core\Router;
use application\models\VerifyModel;

class ProfileController extends Controller {

    public function signinAction() {
        global $response_errors;

        if (!isset($_POST['email']) && !isset($_POST['password'])) 
            $this->ajaxErrorResponse($response_errors['input_empty']);

        $email = $_POST['email'];
        $password = $_POST['password'];

        /** @var VerifyModel $verify_model */
        $verify_model = $this->loadModel("verify");
        $resultVerify = $verify_model->verifySigninInput($email, $password);

        if (!$resultVerify['status']) $this->ajaxErrorResponse($resultVerify['message']);

        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $signin_result = $user_model->signinUser($resultVerify['email'], $resultVerify['password']);

        if ($signin_result) $this->ajaxSuccessResponse();
        else $this->ajaxErrorResponse($response_errors['signin_wrong']);
    }

    public function signupAction() {
        global $response_errors;

        if (!isset($_POST['name']) && !isset($_POST['email']) && !isset($_POST['password1']) && !isset($_POST['password2'])) 
            $this->ajaxErrorResponse($response_errors['input_empty']);
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password1'];

        # Здесь должна быть проверка полученных данных

        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $signup_result = $user_model->signupUser($name, $email, $password);

        echo $signup_result ? "true" : "false";
    }

    protected function ajaxSuccessResponse() {
        $response = [
            "status" => true
        ];

        echo json_encode($response);

        exit();
    }

    protected function ajaxErrorResponse($message) {
        $response = [
            "status" => false,
            "message" => $message
        ];

        echo json_encode($response);
        
        exit();
    }

    protected function ajaxRedirectResponse($url) {

    }
}