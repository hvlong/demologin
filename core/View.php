<?php
class View {

    public $content = array();

    function __construct()
    {
    }

    public function render($dirView = '') {
        if ($this->content != null) {
            $content = $this->content;
        } else {
            $content = null;
        }
        print_r('aaaaaaaaaaaa' . $content);
        require 'views/layer.php';
    }

    public function setContent($name, $value) {
        $this->content[$name] = $value;
    }


}