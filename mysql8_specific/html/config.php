<?php

//phpinfo();
ini_set('display_errors', 1);
$dbname = 'security';
$dbuser = 'test';
$dbpass = 'test';
$dbhost = 'localhost';
$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($connect->connect_error){
    die('Connection failed:'.$connect->connect_error);
}


