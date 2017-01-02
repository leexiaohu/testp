<!DOCTYPE html>
<html lang="zh-ch">
<head>
    <meta charset=utf-8" />
    <title>注册</title>
    <link rel="stylesheet" type="text/css" href="res/css/login.css">
    <script src="res/js/jquery-3.1.1.min.js"></script>
    <script src="res/js/login.js"></script>
    <!--<script src="res/js/index.js"></script>-->
</head>
<body>
<div id = "dialog" class="dialog">
    <div class="dialog_title">
        提示
        <div id="dialog_close" class="dialog_title_btn">关闭</div>
    </div>
    <div class ="dialog_body"></div>
    <div class ="dialog_footer">
        <input class="dialog_footer_btn" type="button" value="确定">
        <input class="dialog_footer_btn" type="button" value="关闭">
    </div>
</div>
<div class="wrapper" >

    <div>
        <input class="logo" type="image" src="res/img/logo.png">
    </div>
    <div class="title"><h2>欢迎加入我们</h2></div>
    <div class="login">
        <form id="register_form" method="post">
        <input class="form-input" type="text" name="username" onblur="checkuser(this)"
                                 placeholder="请输入用户名">
            <div id="username_error" class="login-error register-error">*用户名已经存在</div>
        <input class="form-input" type="email" name="useremail" onblur="checkemail(this)"
                                     placeholder="请输入邮箱">
            <div id="email_error" class="login-error register-error">*邮箱格式错误</div>
        <input class="form-input" type="password" name="password" onblur="checkpasswd(this)"
                                placeholder="请输入密码">
            <div id="passwd_error" class="login-error register-error">*密码长度必须大于6位</div>
        <input id="create_account" class="form-btn" type="button" value="创建账户">
        </form>
    </div>
</div>
</body>
</html>
