<?php

if (!defined('ALLOW_ACCESS')) die('Access Denied');


$act = Val('act', 'GET');
switch ($act) {
    case 'submit':
        $username = Val('username', 'POST');
        if (empty($username)) ShowError('用户/邮箱不能为空', $url['login']);
        $userpwd = Val('password', 'POST');
        if (empty($userpwd)) ShowError('密码不能为空', $url['login']);
        $usernameHash = md5($username);
        $userpwdHash = md5($userpwd);

        if (!isset($user->user)) {
            if ($user->Login($usernameHash, $userpwdHash)) {
                header("Location: " . URL_ROOT);
//                exit;
            } else {
                ShowError('登录失败,请检查用户/邮箱或密码', $url['login']);
            }
        }
        break;
    case 'logout':
        if ($user->Logout()) {
            ShowSuccess('成功退出');
        }
        break;
    default:
        if (isset($user->user)) {
            ShowError('已经登录');
        }
        $smarty = InitSmarty();
        $smarty->assign('do', $do);
        $smarty->assign('show', $show);
        $smarty->assign('url', $url);
        $smarty->display('login.html');
}

