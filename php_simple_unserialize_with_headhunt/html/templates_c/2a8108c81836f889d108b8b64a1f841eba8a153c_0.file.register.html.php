<?php
/* Smarty version 4.1.0, created on 2022-06-10 06:40:53
  from '/var/www/html/themes/default/templates/register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a2e7756b4043_69299004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a8108c81836f889d108b8b64a1f841eba8a153c' => 
    array (
      0 => '/var/www/html/themes/default/templates/register.html',
      1 => 1653310584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_62a2e7756b4043_69299004 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>XSS Platform</title>
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
</head>
<body style="background-color: #3c3c3c">
<?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <form class="form-register" id="formRegister" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=register&act=submit" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">注册</div>
            <div class="panel-body">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="text"
                               placeholder="请输入用户名 4-20个字符(字母、汉字、数字、下划线)" id="username" name="username">
                        <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
<span class="input-group-addon">
<i class="glyphicon glyphicon-lock"></i>
</span>
                        <input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="password"
                               placeholder="请输入密码 6-20个字符(字母、数字、下划线)" id="password" name="password">
                        <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                        <i class="glyphicon glyphicon-ok-sign"></i>
                        </span>
                        <input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="password"
                               placeholder="请再次输入密码" id="password2" name="password2">
                        <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
                    </div>
                </div>



                <button type="submit" class="btn btn-success" style="float:right;">提交注册</button>
            </div>
        </div>
</div>
</form>
<!-- main End -->

<?php echo '<script'; ?>
 type="text/javascript">
    

    function Register() {
        var errNum = 0;
        var checkItems = ['username', 'password', 'password2'];
        for (var i = 0; i < checkItems.length; i++) {
            if ($("#" + checkItems[i]).val() == "") {
                errNum++;
                $("#" + checkItems[i] + "_check").addClass("error");
                $("#" + checkItems[i] + "_check").html("不能为空");
            } else {
                $("#" + checkItems[i] + "_check").addClass("correct");
                $("#" + checkItems[i] + "_check").html("√");
            }
        }
        /* 特殊判断 */
        //用户格式
        var user = $("#user").val();
        if (user != "") {
            if (!/^[\w\u4E00-\u9FA5]{4,20}$/.test(user)) {
                errNum++;
                $("#user_check").removeClass("correct");
                $("#user_check").addClass("error");
                $("#user_check").html("4-20个字符(字母、汉字、数字、下划线)");
            } else {
                $("#user_check").removeClass("error");
                $("#user_check").addClass("correct");
                $("#user_check").html("√");
            }
        }


        //密码
        var pwd = $("#password").val();
        if (pwd != "") {
            if (!/^\w{6,20}$/.test(pwd)) {
                errNum++;
                $("#pwd_check").removeClass("correct");
                $("#pwd_check").addClass("error");
                $("#pwd_check").html("6-20个字符");
            } else {
                $("#pwd_check").removeClass("error");
                $("#pwd_check").addClass("correct");
                $("#pwd_check").html("√");
            }
        }
        //确认密码
        var pwd2 = $("#password2").val();
        if (pwd2 != "") {
            if (pwd2 != pwd) {
                errNum++;
                $("#pwd2_check").removeClass("correct");
                $("#pwd2_check").addClass("error");
                $("#pwd2_check").html("两次输入密码不相同");
            } else {
                $("#pwd2_check").removeClass("error");
                $("#pwd2_check").addClass("correct");
                $("#pwd2_check").html("√");
            }
        }
        // //提交注册
        // if (errNum <= 0) {
        //     var key = $("#key").val();
        //     //判断用户/邮箱/key
        //     $.post("/index.php?do=register&act=submit" + Math.random(), {
        //         "username": user
        //     }, function (re) {
        //         var reArr = re.split("|");
        //         if (reArr[0] == 0 && reArr[1] == 0 && reArr[2] == 0) {
        //             $("#formRegister").submit();
        //         } else {
        //             if (reArr[0] > 0) {
        //                 $("#user_check").removeClass("correct");
        //                 $("#user_check").addClass("error");
        //                 $("#user_check").html("用户已存在");
        //             }
        //             if (reArr[1] > 0) {
        //                 $("#email_check").removeClass("correct");
        //                 $("#email_check").addClass("error");
        //                 $("#email_check").html("邮箱已存在");
        //             }
        //             if (reArr[2] > 0) {
        //                 $("#key_check").removeClass("correct");
        //                 $("#key_check").addClass("error");
        //                 $("#key_check").html("邀请码输入错误");
        //             }
        //         }
        //     });
        // }
    }

    
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
