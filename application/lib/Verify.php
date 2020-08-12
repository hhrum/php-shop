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

    /** 
     * Метод, проверяющий поля на валидность
     * 
     * @param string $email Электронная почта пользователя
     * @param string $password Пароль пользователя
     * 
     * @return array Возвращает ассоциативный массив содержащий статус проверки и сообщение об ошибке или валидные почту с паролем
     */
    public function verifySignupInput($name, $email, $password1, $password2) {
        global $response_errors;

        $name_clean = $this->xssProtection($name);
        $email_clean = $this->xssProtection($email);
        $password1_clean = $this->xssProtection($password1);
        $password2_clean = $this->xssProtection($password2);

        if (!$this->verifyEmail($email_clean)) return $this->errorResponse($response_errors['email_incorrect']);
        if (!$this->verifyPasswordEquals($password1_clean, $password2_clean)) return $this->errorResponse($response_errors['passwords_not_equals']);

        return ['status' => true, 'name' => $name_clean, 'email' => $email_clean, 'password' => $password1_clean];
    }

    public function verifyEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function verifyPasswordEquals($password1, $password2) {
        return $password1 == $password2;
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