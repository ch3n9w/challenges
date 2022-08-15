<?php

if(!defined('ALLOW_ACCESS')) { die('Access Denied');}

$target = $_GET['file'];

if (isset($target) && is_string($target)) {
    if (strpos($target, "flag") == true) die("forbidden!");
    echo file_get_contents($target);
}

?>
