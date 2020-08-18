<?php

namespace application\models;

use application\core\Model;
use application\models\ProductModel;
use application\models\OrderModel;

class BasketModel extends Model {

    protected $user = null;
    protected $order_model;
    protected $basket;

    protected $product_model;
    protected $base_name = "order_product";

    public function __construct() {
        parent::__construct();
        $this->product_model = new ProductModel();
    }

    public function initUser($user) {
        $this->user = $user;
        if (!$user) return;
        $this->order_model = new OrderModel($this->user);
        $this->basket = $this->order_model->getBasket();
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

    public function convertBasketFromSessionToUser() {
        if (!$this->user) return;

        $session_items = isset($_SESSION['basket']) ? $_SESSION['basket'] : [];

        foreach($session_items as $value) $this->addProduct($value['product_id'], $value['count']);

        unset($_SESSION['basket']);
    }

    /**
     * Метод добавляет новую покупку
     */
    public function addProduct($product_id, $count = 1) {
        global $response_errors;
        if (!$this->product_model->getProductById($product_id)) return ['status' => false, 'message' => $response_errors['product_not_found']];
        if(in_array($product_id, $this->getProductsId())) return ['status' => true];

        if ($this->user) {     
            $order_product = $this->db->dispense($this->base_name);

            $order_product->product_id = $product_id;
            $order_product->count = $count;

            $this->basket->ownOrderProductList[] = $order_product;
            $this->db->store($this->basket);
        } else {        
            $basket_item = [
                'product_id' => $product_id,
                'count' => $count
            ];
            $_SESSION['basket'][] = $basket_item;
        }

        return ['status' => true];
    }
    
    /**
     * Метод удаляет элемент из списка покупок
     */
    public function removeProduct($product_key) {

        if ($this->user) {
            
        } else {
            unset($_SESSION['basket'][$product_key]);
        }

        return true;
    }
    
    /** 
     * Метод возвращающий массив бинов покупок
     */
    public function getProducts() {
        $products = $this->getProductsId();
        $products = $this->product_model->getProductsByListId($products);
        return $products;
    }

    public function getProductsId() {     
        $items = $this->getBasketItems();
        $ids = [];

        foreach ($items as $key => $value) {
            $ids[$key] = $value['product_id'];
        }

        return $ids;
    }

    public function getBasketItems() {

        if ($this->user) {
            return $this->basket->ownOrderProductList;
        } else {
            return isset($_SESSION['basket']) ? $_SESSION['basket'] : [];
        }   

    }

}