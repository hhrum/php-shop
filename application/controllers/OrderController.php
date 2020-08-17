<?php

namespace application\controllers;

use application\core\Controller;
use application\models\BasketModel;
use application\models\OrderModel;

class OrderController extends Controller {

    protected $basket_model;
    protected $order_model;

    public function __construct($route) {
        
        parent::__construct($route);

        $this->basket_model = new BasketModel();
        $this->basket_model->initUser($this->user);
        $this->order_model = new OrderModel($this->user);
        
    }

    public function placeAction() {

        $basket = $this->basket_model->getBasketItems();

        if (!$this->user) $this->ajaxErrorResponse("");
        if (empty($basket)) $this->ajaxErrorResponse("");
        
        $result = $this->order_model->placeOrder();

        $this->ajaxSuccessResponse();

    }

}