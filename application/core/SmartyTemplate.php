<?php

namespace application\core;

class SmartyTemplate extends \Smarty {

    protected $route;
    protected $config;
    public $layout = "default";

    public function __construct($route = []) {
        $this->route = $route;
        $this->config = require "application/config/smarty.php";

        parent::__construct();
        $this->setTemplateDir($this->config['template']);
        $this->setCompileDir($this->config['template_c']);
        $this->setConfigDir($this->config['config']);
        $this->setCacheDir($this->config['cache']);
    }

    public function render($title) {
        $layout_file = 'layouts/' . $this->layout . '.tpl';
        $layout_path = $this->config['template'] . '/' . $layout_file;
        $tpl_file = $this->route['controller'] . '/' . $this->route['action'] . '.tpl';
        $tpl_path = $this->config['template'] . '/' . $tpl_file;

        if (file_exists($layout_path) && file_exists($tpl_path)) {
            $this->assign("title", $title);
            $this->assign("tpl_name", $tpl_file);

            $this->display($layout_file);
        }
    }

    public function errorCode($code) {
        $file = "errors/$code.tpl";
        $path = $this->config['template'] . '/' . $file;
        
        if(file_exists($path)) {
            $this->display($file);
        } 
    }

}