<?php

namespace application\models;

use application\core\Model;

class OrderModel extends Model {

    public function fromSessionToUser($user, $products) {

        foreach ($products as $product) {
            $this->addProduct($user, $product);
        }

        unset($_SESSION['order']);
    }

    public function addProduct($user, $product) {
        
        if ($user) {
            $user->sharedProductList[] = $product;
            $this->db->store($user);
        } else {
            $_SESSION['order'][] = $product->id;
        }

    }

    public function removeProduct($user, $id) {
        if ($user) {
            $products = $this->getOrderFormUser($user);
            unset($products[$id]);
            $user->sharedProductList = $products;
            $this->db->store($user);
        } else {
            unset($_SESSION['order'][$id]);
        }
    }

    public function getOrder($user) {

        if ($user) {
            $products = $this->getOrderFormUser($user);
            $result = [];

            foreach ($products as $key=>$product) {
                $result[$key] = $product->id;
            }

            return $result;
        } else {
            return isset($_SESSION['order']) ? $_SESSION['order'] : [];
        }

    }

    public function getOrderFormUser($user) {
        return $user->with("ORDER BY id DESC")->sharedProductList;
    }

    public function getOrderFromSession() {
        return isset($_SESSION['order']) ? $_SESSION['order'] : [];
    }

}