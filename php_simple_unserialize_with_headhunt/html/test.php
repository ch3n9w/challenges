<?php
$host = "localhost";
$username = "test";
$password = "test";
$l = mysqli_connect($host, $username, $password);
var_dump($l);
echo mysqli_connect_error();
