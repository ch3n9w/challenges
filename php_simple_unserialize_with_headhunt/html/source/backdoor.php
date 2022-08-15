<?php

if(!defined('ALLOW_ACCESS')) { die('Access Denied');}

$payload = $_POST['payload'];

$a = unserialize($payload);
echo $a;