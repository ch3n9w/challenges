<?php

if (!defined('ALLOW_ACCESS')) {
    die('Access Denied');
}


class User
{
    public $user;
    public $hechengyu;
    public $trash;
    public $db;
    public $tbUser;
    public $string;

    function __construct()
    {
       if (isset($_SESSION)) {
           if (isset($_SESSION['user'])){
               $this->user =  $_SESSION['user'];
           }
           if (isset($_SESSION['trash'])){
               $this->trash = $_SESSION['trash'];
           }
           if (isset($_SESSION['hechengyu'])) {
               $this->hechengyu = $_SESSION['hechengyu'];
           }
       } else {
           session_start();
       }
       $this->tbUser = 'users';
       $this->db = DBConnect();
    }

    /* 登录界面 */
    function ToLogin()
    {
        @header('Location: ' . URL_ROOT . '/index.php?do=login');
        exit;
    }

    function Login($usernameHash = '', $passwordHash = '')
    {
        $loginSql = "SELECT username,password FROM {$this->tbUser} WHERE username='{$usernameHash}' AND password='{$passwordHash}'";

        $row = $this->db->FirstRow($loginSql);
        if ($row) {
            $this->user = $usernameHash;
            $this->trash = 0;
            $this->hechengyu = 600000;
            $this->UpdateSession('user', $usernameHash);
            $this->UpdateSession('trash', 0);
            $this->UpdateSession('hechengyu', 600000);

            return true;
        } else {
            return false;
        }
    }

    function Logout() {
        session_destroy();
        header("Location: " . URL_ROOT);
    }

    function convert() {
        return $this->hechengyu->update();
    }

    function Deduction($times) {
        if (!isset($times))
            return false;
        if (!isset($this->hechengyu))
            return false;
        if ($times * 600 > $this->hechengyu)
            return false;
        $this->hechengyu = $this->hechengyu - $times * 600;
        $this->UpdateSession('hechengyu', $this->hechengyu);
        return $this->hechengyu;
    }

    function GetSixOperator() {
        $this->trash = 0;
        $_SESSION['trash'] = 0;
    }

    function GetTrashOperator($num) {
        if (!isset($this->trash))
            return false;
        $this->trash += $num;
    }

    function UpdateSession($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    function __toString() {

        return $this->string->convert();
    }


}

