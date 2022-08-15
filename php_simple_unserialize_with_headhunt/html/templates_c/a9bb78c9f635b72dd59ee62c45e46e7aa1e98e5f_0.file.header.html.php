<?php
/* Smarty version 4.1.0, created on 2022-06-10 06:40:51
  from '/var/www/html/themes/default/templates/header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a2e7734faee5_09897754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9bb78c9f635b72dd59ee62c45e46e7aa1e98e5f' => 
    array (
      0 => '/var/www/html/themes/default/templates/header.html',
      1 => 1653318233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a2e7734faee5_09897754 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="navbar navbar-fixed-top navbar-inverse">
   <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php">限定寻访平台</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php">主页</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=search&file=config.php">Check</a></li>

          </ul>
		  <?php if (empty($_smarty_tpl->tpl_vars['show']->value['user']) || !(isset($_smarty_tpl->tpl_vars['show']->value['user']['userName']))) {?>
		  	<ul class="nav navbar-nav navbar-right ng-scope" ng-controller="user_ctrl" id="header_me">
                <li>
                    <a class="mr_15" wt-tracker="Header|Menu|Goto Signin" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=login">登录</a>
                <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=register" wt-tracker="Header|Menu|Goto Apply">注册</a>
                </li>
                
            </ul>
			<?php }?>
		  <?php if ((isset($_smarty_tpl->tpl_vars['show']->value['user'])) && (isset($_smarty_tpl->tpl_vars['show']->value['user']['userName']))) {?>
		  <ul class="nav navbar-nav navbar-right ng-scope" ng-controller="user_ctrl" id="header_me">
                <li>
                    <a href="#" wt-tracker="Header|Menu|Goto Apply">用户：<?php echo $_smarty_tpl->tpl_vars['show']->value['user']['userName'];?>
</a>
                <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></li>
                <li>
                    <a href="#" wt-tracker="Header|Menu|Goto Apply">剩余合成玉：<?php echo $_smarty_tpl->tpl_vars['show']->value['user']['hechengyu'];?>
</a>
                </li>

                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=login&act=logout" wt-tracker="Header|Menu|Goto Apply">退出登陆</a>
                </li>
            </ul>
			<?php }?>
        </div><!--/.nav-collapse -->
      <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></div>
    </div>
<?php }
}
