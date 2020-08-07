<?php

namespace application\models;

use application\core\Model;

class CategoryModel extends Model {

    protected $base_name = "category";

    public function addCategory($name, $icon) {
        $data = [
            "name" => $name,
            "icon" => $icon,
        ];

        return $this->db->insert($this->base_name, $data);
    }

    public function getCategory($id) {
        $category = $this->db->findOne($this->base_name, $id);

        return $category;
    }

    public function getAlCategories() {
        $categories = $this->db->select($this->base_name);
        
        $categories = empty($categories) ? false : $categories;

        return $categories;
    }

}