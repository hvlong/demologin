<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 9/15/2017
 * Time: 8:40 AM
 */
class Controller {

    protected $view;
    protected $model;

    function __construct()
    {
        $this->view = new View();
    }

    public function initModel($modelName) {
        $modelName = ucfirst(strtolower($modelName)) . 'Model';
        include(DIR_MODEL . '/' . $modelName . '.php');
        $this->model = new $modelName();
    }

}