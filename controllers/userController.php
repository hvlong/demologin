<?php

class userController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        parent::initModel('User');
    }

    public function index() {
        $this->login();
    }

    public function login()
    {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $msg = array();
            if (filter_var($username, FILTER_VALIDATE_EMAIL) !== false) {
                $userModel = $this->model->getUser($username, $password);
                if ($userModel != null) {

                } else {
                    $msg = array(
                        'type' => 'error',
                        'content' => 'Email incorrect. Please try again');
                }
            } else {
                $msg = array(
                    'type' => 'error',
                    'content' => 'Email incorrect. Please try again');
            }
            $this->view->setContent('message', $msg);
        }
        $this->view->render('user/login');
    }
}