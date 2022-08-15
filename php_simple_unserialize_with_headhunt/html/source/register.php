<?php

if(!defined('ALLOW_ACCESS')) { die('Access Denied');}

if(REGISTER===false) {
    ShowError('注册功能已关闭');
}


$act = Val('act', 'GET');
switch ($act) {
    case 'submit':
//        if (isset($_SESSION)) {
//            ShowError('您已登录,不能进行注册,请登出或者清空session');
//        }

//        $session_handler = Val('handler', 'POST');
//        if ($session_handler != '') {
//            ini_set('session.serialize_handler', $session_handler);
//        }
//        session_start();

        $db = DBConnect();

        $username = Val('username', 'POST');
        $userpwd = Val('password', 'POST');
        $usernameHash = HashString($username);
        $userpwdHash = HashString($userpwd);

        $tbUser = 'users';

        $userExisted = $db->FirstValue("SELECT COUNT(*) FROM {$tbUser} WHERE username='{$usernameHash}'");
        if ($userExisted > 0) {
            ShowError("用户{$username}已存在", $url['register'], '重新填写');
        }

        // Insert into database
        $executeArr = array('username' => $usernameHash, 'password' => $userpwdHash, 'hechengyu' => 6000, 'trash' => 0);
        if ($db->AutoExecute($tbUser, $executeArr, 'INSERT')) {
            $user->Login($usernameHash, $userpwdHash);
            ShowSuccess('注册成功', $url['root']);
        } else {
            ShowError('出错了,请与管理员联系');
        }
        break;
    default:
        if ($user->userId > 0) {
            ShowError('您已登录,不能进行注册!');
        }
        $key = Val('key', 'GET');
        $smarty = InitSmarty();
        $smarty->assign('do', $do);
        $smarty->assign('register', REGISTER);
        $smarty->assign('key', $key);
        $smarty->assign('show', $show);
        $smarty->assign('url', $url);
        $smarty->display('register.html');
        break;
}
