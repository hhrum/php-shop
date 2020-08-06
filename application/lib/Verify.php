<?php

namespace application\lib;

class Verify {

    /** 
     * Метод, проверяющий поля на валидность
     * 
     * @param string $email Электронная почта пользователя
     * @param string $password Пароль пользователя
     * 
     * @return array Возвращает ассоциативный массив содержащий статус проверки и сообщение об ошибке или валидные почту с паролем
     */
    public function verifySigninInput($email, $password) {
        global $response_errors;

        $email_clean = $this->xssProtection($email);
        $password_clean = $this->xssProtection($password);

        if (!$this->verifyEmail($email_clean)) return $this->errorResponse($response_errors['email_incorrect']);

        return ['status' => true, 'email' => $email_clean, 'password' => $password_clean];
    }

    public function verifyEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function xssProtection($input) {
        return htmlspecialchars(stripslashes($input));
    }

    protected function errorResponse($message) {
        return [
            'status' => false,
            'message' => $message
        ];
    }

}