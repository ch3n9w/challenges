<?php

if (version_compare(PHP_VERSION, '7.0', '<')) {
    die('此程序需PHP版本大于7.0 !');
}

require 'init.php';

$dos = array('index', 'register', 'login', 'user', 'headhunt', 'calculator', 'search', 'backdoor');
//$url = array();
foreach ($dos as $do) {
    $url[$do] = URL_ROOT . '/index.php?do=' .$do;
}


$do = Val('do', 'GET', 0);
if (!in_array($do, $dos)) {
    $do = 'index';
}

require ROOT_PATH . '/source/' . $do . '.php';
