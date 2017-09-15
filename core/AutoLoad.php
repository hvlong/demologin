<?php

class AutoLoad
{

    protected $config;

    function __construct()
    {
        session_start();
//        $this->config = $config;
    }

    public function run()
    {
        if (!empty($_GET)) {
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = explode('/', $url);
            $file = 'controllers/' . $url[0] . 'Controller' . '.php';
            if (file_exists($file)) {
                require $file;
                $this->initController($url[0], $url[1]);
            } else {
                require 'controllers/HomeController' . '.php';;
                $this->initController('Home', 'index');
            }
        } else {
            require 'controllers/HomeController' . '.php';;
            $this->initController('Home', 'index');
        }
    }

    private function initController($controller, $name)
    {
        $nameController = $controller . 'Controller';
        $controller = new $nameController;
        $controller->{$name}();
    }
}