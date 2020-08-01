<?php

namespace application\models;

use application\core\Model;

class Category {

    protected $id;
    protected $name;
    protected $icon;

    public function __construct($id, $name, $icon)
    {
        $this->id = $id;
        $this->name = $name;
        $this->icon = $icon;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getIcon() {
        return $this->icon;
    }

}

class CategoryModel extends Model {

    protected $base_name = "category";

    public function addCategory($name, $icon) {
        $data = [
            "name" => $name,
            "icon" => $icon,
        ];

        return $this->db->insert($this->base_name, $data);
    }

    public function getCategories() {
        $cats = $this->db->select($this->base_name);

        $categories = [];

        foreach ($cats as $category) {
            $categories[] = new Category($category['id'], $category['name'], $category['icon']);
        }

        return $categories;
    }

}