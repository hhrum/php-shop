<?php

namespace application\models;

use application\core\Model;
use application\models\ProductModel;

class OrderModel extends Model {

    protected $base_name = "order";
    protected $user;

    public function __construct($user) {
        parent::__construct();
        $this->user = $user;
    }

    /**
     * Метод покупки заказов из корзины
     */
    public function placeOrder() {
        $basket = $this->getBasket();

        $this->changeState($basket, "paid");

        return ['status' => true];
    }

    public function getBasket() {
        $basket = $this->user->withCondition("state = ?", ['basket'])->ownOrderList;

        $basket = empty($basket) ? $this->addBasket() : $basket[array_key_last($basket)];

        return $basket;
    }

    /**
     * Возвращает все заказы(без корзины)
     */
    public function getAllOrders() {
        $orders = $this->user->with("ORDER by id")->withCondition("state != ? ORDER by id DESC", ['basket'])->ownOrderList;
        $product_model = new ProductModel();

        foreach ($orders as $key => $value) {

            $products_ids = [];

            foreach ($value->ownOrderProductList as $key => $value) {
                $products_ids[$key] = $value['product_id'];
            }

            $orders[$key]['products'] = $product_model->getProductsByListId($products_ids);
        }

        return $orders ? $orders : [];
    }

    protected function addBasket() {
        return $this->addOrder("basket");
    }

    protected function addOrder($state) {
        $order = $this->db->dispense($this->base_name);

        $order->date = date("d-m-Y");
        $order->state = $state;

        $this->user->ownOrderList[] = $order;
        $this->db->store($this->user);

        return $order;
    }

    protected function changeState($order, $state)
    {
        $order['state'] = $state;

        $this->db->store($order);
    }

}