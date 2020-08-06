<?php

namespace application\models;

use application\core\Model;

/**
 * Модель пользователей
 */
class UserModel extends Model {
    protected $base_name = "user";

    /**
     * Метод регистрации* пользователя
     * 
     * *Метод предполагает, что все поля "дезинфицированны"
     * 
     * @param string $username Имя пользователя
     * @param string $email Email пользователя
     * @param string $password Пароль пользователя
     * @param string $role Роль пользователя
     */
    public function signupUser($username, $email, $password, $role = "client") {

        if ($this->getUserByEmail($email)) return false;
        $pass_sec = password_hash($password, PASSWORD_DEFAULT);
        
        $data = [
            "name" => $username,
            "email" => $email,
            "password" => $pass_sec,
            "role" => $role,
            "hash" => ""
        ];

        return $this->db->insert($this->base_name, $data);
    }

    /**
     * Метод авторизации* пользователя
     * 
     * *Метод предполагает, что все поля "дезинфицированный"
     * 
     * @param string $email Email пользователя
     * @param string $password Пароль пользователя
     */
    public function signinUser($email, $password) {
        $user = $this->getUserByEmail($email);

        if (!isset($user) || !password_verify($password, $user['password'])) return false;
        
        $hash = password_hash(random_bytes(5), PASSWORD_DEFAULT);

        $user['hash'] = $hash;
        $this->db->update($this->base_name, $user['id'], $user);

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_hash'] = $hash;

        return true;
    }

    public function signoutUser() {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_hash']);
    }

    /**
     * Метод проверки авторизованности пользователя
     */
    public function checkAuth() {
        if (isset($_SESSION['user_hash']) && isset($_SESSION['user_id'])) {
            $user = $this->getUserById($_SESSION['user_id']);
            return ($user && $user['hash'] == $_SESSION['user_hash']) ? $user : false;
        } 
        return false;
    }

    /**
     * Метод поиска пользователя
     * 
     * @param integer $id Уникальный идентификатор пользователя
     */
    public function getUserById($id) {
        return $this->getUser($id, "id");
    }

    /**
     * Метод поиска пользователя
     * 
     * @param string $email Электронная почта пользователя
     */
    public function getUserByEmail($email) {
        return $this->getUser($email, "email");
    }

    public function getUser($value, $key) {
        return $this->db->findOne($this->base_name, $value, $key);
    }
}