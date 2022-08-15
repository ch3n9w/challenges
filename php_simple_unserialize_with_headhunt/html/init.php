<?php

define('ALLOW_ACCESS', true);
define('ROOT_PATH', dirname(__FILE__));

require ROOT_PATH.'/config.php';

define('URL_ROOT', $config['urlroot']);
//define('URL_REWRITE', $config['urlrewrite']);
define('REGISTER', $config['register']);
//define('FILE_PATH', $config['filepath']);
//define('FILE_PREFIX', $config['fileprefix']);
define('TEMPLATE_PATH', ROOT_PATH.'/themes/'.$config['template']);
define('EXPIRES', $config['expires']);

require ROOT_PATH.'/source/function.php';
require ROOT_PATH.'/source/class/User.class.php';
require ROOT_PATH.'/source/class/DB.class.php';

session_start();
$user=new User();

$url = array();
$url['root'] = $config['urlroot'];
$url['themePath'] = $url['root'].'/themes/'.$config['theme'];

if (isset($user->user)) {
    $show['user']=array(
        'userName' => $user->user,
        'hechengyu' => $user->hechengyu,
        'trash' => $user->trash,
//        'avatarImg'        =>$user->avatarImg,
//        'avatarImg_s'    =>$user->avatarImg_s,
    );
}
//if($user->userId>0) {
//    $show['user']=array(
//        'userId'         =>$user->userId,
//        'userName'        =>$user->userName,
//        'adminLevel'    =>$user->adminLevel,
//        'token'            =>$user->token,
//        'avatarImg'        =>$user->avatarImg,
//        'avatarImg_s'    =>$user->avatarImg_s,
//        'signature'        =>$user->signature
//    );
//}
