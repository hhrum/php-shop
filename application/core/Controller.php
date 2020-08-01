<?php

namespace application\core;

use application\core\SmartyTemplate;

/*

    //

*/

abstract class Controller {

    public $route;
    public $view;

    public function __construct($route) {

        $this->route = $route;
        $this->view = new SmartyTemplate($route);
        $this->model = $this->loadModel($route['controller']);

    }

    public function loadModel($name) {

        $path = 'application\models\\'.ucfirst($name).'Model';
		if (class_exists($path)) {
			return new $path;
        }
        
    }

}