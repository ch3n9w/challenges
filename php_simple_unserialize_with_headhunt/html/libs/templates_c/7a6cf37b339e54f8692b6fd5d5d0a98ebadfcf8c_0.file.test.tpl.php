<?php
/* Smarty version 4.1.0, created on 2022-05-17 06:55:05
  from '/srv/http/html/libs/test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628346c915b4f2_23865228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a6cf37b339e54f8692b6fd5d5d0a98ebadfcf8c' => 
    array (
      0 => '/srv/http/html/libs/test.tpl',
      1 => 1652769407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628346c915b4f2_23865228 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Info</title>
</head>
<body>

<pre>
User Information:

Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>

</pre>

</body>
</html><?php }
}
