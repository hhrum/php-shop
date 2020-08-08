<?php

namespace application\models;

use application\core\Model;

class  ProductModel extends Model {

    protected $base_name = "product";

    /**
     * Функция добавления продукта
     * 
     * Продукт добавляется к категории по принциу 12M,
     * 
     * @var OODBBean $category - бин категории
     * @var List $data - ассоциативный массив данных продукта
     */
    public function addProduct($category, $data) {
        $product = \R::dispense($this->base_name);

        foreach ($data as $key => $value) {
            $product[$key] = $value;
        }

        $category->ownProductList[] = $product;
        return \R::store($category);        
    }

    /**
     * Функция возвращает все продукты категории
     * 
     * @var OODBBean $category - бин категории
     */
    public function getAllProducts($category) {
        $products = $category->ownProductList;

        return $products;
    }

    public function getProductById($id) {
        return $this->getProduct($id, "id");
    }

    public function getProduct($value, $key) {
        return $this->db->findOne($this->base_name, $value, $key);
    }

}