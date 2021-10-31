<?php

include('config.php');

if(!isset($_GET['name'])) {
    header("Location: index.php?name=Dumb");
    exit;
}

$name = $_GET['name'];

if (preg_match('/select|delete|drop|insert|update/i', $name))
    die('hacker go away!');

$statement = 'select * from users where username=\''.$name.'\'';
$result = $connect->query($statement);

if ($result) {
    if($result->fetch_row()) {
        // var_dump($result->fetch_row());
        echo 'user do exists';
    } else {
        echo 'user do not exists';
    }
}

