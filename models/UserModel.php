<?php
class UserModel extends Model {

    public $id;
    public $username;
    public $password;


    public function __construct()
    {
    }

    public function getUser($username, $password) {
        $db = DBConnection::getInstance();
        $req = $db->prepare('SELECT * FROM user WHERE username = :username AND password = :password');
        $req->execute(array('username' => $username, 'password' => $password));
        $userModel = $req->fetch();
        return $userModel;
    }

}