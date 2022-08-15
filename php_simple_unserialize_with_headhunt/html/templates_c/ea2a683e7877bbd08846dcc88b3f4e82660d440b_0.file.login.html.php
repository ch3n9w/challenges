<?php
/* Smarty version 4.1.0, created on 2022-05-23 14:59:18
  from '/var/www/html/themes/default/templates/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628ba146a23204_82330516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea2a683e7877bbd08846dcc88b3f4e82660d440b' => 
    array (
      0 => '/var/www/html/themes/default/templates/login.html',
      1 => 1653310584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_628ba146a23204_82330516 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>限定寻访平台</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/css/css.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/js/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/css/ak-ui.min.css">

<?php echo '<script'; ?>
>
function Login(){
	if($("#user").val()==""){
		ShowError("用户名不能为空");
		return false;
	}
	if($("#pwd").val()==""){
		ShowError("密码不能为空");
		return false;
	}
}
function ShowError(content){
	$("#contentShow").attr("class","error");
	$("#contentShow").html(content);
}
<?php echo '</script'; ?>
>

</head>
<body style="background-color: #3c3c3c">
<?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<form class="form-signin" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=login&act=submit" method="post" onsubmit="return Login()">
<div class="panel panel-default">
  <div class="panel-heading">登陆</div>
  <div class="panel-body">
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<i class="glyphicon glyphicon-user"></i>
</span>
<input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="text" placeholder="输入用户名/邮箱" name="username" id="user">
<iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></div>
</div>
<div class="form-group">
       <div class="input-group">
           <span class="input-group-addon fs_17"><i class="glyphicon glyphicon-lock"></i><iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></span>
              <input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="password" placeholder="输入密码" name="password" id="pwd">
       </div>
</div>


      <button class="btn btn-lg  btn-block" type="submit">
          <div class="ak-button--start">
          <div class="icon triangle-right"></div>
          <div class="label">START</div>
      </div></button>
</div>
</div>
</form>
</div>

</html><?php }
}
