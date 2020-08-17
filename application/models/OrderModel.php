<?php

namespace application\models;

use application\core\Model;

class OrderModel extends Model {

    protected $base_name = "order";
    protected $user;

    public function __construct($user) {
        parent::__construct();
        $this->user = $user;
    }

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

    public function getAllOrders() {
        $orders = $this->user->ownOrderList;
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