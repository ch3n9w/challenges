<?php
/* Smarty version 4.1.0, created on 2022-05-23 15:00:18
  from '/var/www/html/themes/default/templates/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628ba1825e7d29_63600931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3185534934f7d15bf26b0bdb3736d4f83bc27dc' => 
    array (
      0 => '/var/www/html/themes/default/templates/index.html',
      1 => 1653310540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_628ba1825e7d29_63600931 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>标准寻访平台</title>
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

</head>
<body style="background-color: #3c3c3c">

<?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
	<div align="center">

		<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=headhunt&times=1">
			<button class="ak-button" ak-button--outline>寻访一次</button>
		</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=headhunt&times=10">
			<button class="ak-button" ak-button--outline>寻访十次</button>
		</a>

	</div>
	<br/>
<br/>
	<?php if ((isset($_smarty_tpl->tpl_vars['operators']->value))) {?>
	<div style="
		text-align: center;" >
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['operators']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
		<a href="http://prts.wiki/w/<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" target="_blank">
			<div class="ak-card ak-card--place ak-fx--glow" style="display:inline-block;
					border: 5px;
				  background: <?php echo $_smarty_tpl->tpl_vars['v']->value['color'];?>
;
				  font-size: 20px;
				 --ak-fx-glow-color: <?php echo $_smarty_tpl->tpl_vars['v']->value['color'];?>
">
				<div style="
					width: 100%;
					height: 100%;
				  background-image: url(<?php echo $_smarty_tpl->tpl_vars['v']->value['icon'];?>
);
					background-size: 100%;
					background-repeat: no-repeat">
				<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>


			</div>
			</div>
		</a>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>

	<?php }?>




</body>
</html><?php }
}
