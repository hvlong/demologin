<?php
class Authentication {

    public static function isLogin() {
        return (isset($_SESSION['user']));
    }

}