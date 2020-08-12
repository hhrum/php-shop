<?php

namespace application\models;

use application\core\Model;
use application\models\ProductModel;

class BasketModel extends Model {

    protected $product_model;

    public function __construct() {
        $this->product_model = new ProductModel();
    }
    
    /** 
     * Метод возвращающий корзину покупок с чистым массивом
     */
    public function buildBasket() {
        $products = $this->getProducts();
        $result = [];

        foreach ($products as $key => $value) {
            $result[$key] = $value->export();
        }

        return $result;
    }

    /**
     * Метод добавляет новую покупку
     */
    public function addProduct($product_id) {
        global $response_errors;
        if (!$this->product_model->getProductById($product_id)) return ['status' => false, 'message' => $response_errors['product_not_found']];
        else if(in_array($product_id, $_SESSION['basket'])) return ['status' => true];
        
        $_SESSION['basket'][] = $product_id;

        return ['status' => true];
    }
    
    /**
     * Метод удаляет элемент из списка покупок
     */
    public function removeProduct($product_key) {
        unset($_SESSION['basket'][$product_key]);

        return true;
    }
    
    /** 
     * Метод возвращающий массив покупок
     */
    public function getProducts() {
        $products = $this->getProductsId();
        $products = $this->product_model->getProductsByListId($products);
        return $products;
    }

    public function getProductsId() {
        return $_SESSION['basket'];
    }

}