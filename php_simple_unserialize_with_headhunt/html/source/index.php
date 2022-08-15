<?php

if(!defined('ALLOW_ACCESS')) { die('Access Denied');}

if(!isset($user->user)) {
    $user->ToLogin();
}

//require 'common.php';

$smarty=InitSmarty();
$smarty->assign('do', $do);
$smarty->assign('show', $show);
$smarty->assign('url', $url);
$smarty->display('index.html');
?>
