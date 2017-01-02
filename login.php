<!DOCTYPE html>
<html lang="zh-ch">
<head>
    <meta charset="UTF-8">
    <title>欢迎登录</title>
    <link rel="stylesheet" type="text/css" href="res/css/login.css">
    <script src="res/js/jquery-3.1.1.min.js"></script>
    <script src="res/js/login.js"></script>
    <!--<script src="res/js/index.js"></script>-->
</head>
<body>
<div class="wrapper" >
    <div>
        <input class="logo" type="image" src="res/img/logo.png">
    </div>
    <div class="title"><h2>登录到宠物社区</h2></div>
    <div class="login-error">用户名或密码错误</div>
    <div class="login">
        <form id="login_form" >
        <input class="form-input" type="text" name="username" placeholder="请输入用户名或邮箱">
        <input class="form-input" type="text" name="password" placeholder="请输入密码">
        <input id="login_btn" class="form-btn" type="button" value="登录">
        </form>
    </div>
    <div class="login">
        <label>新用户？<a href="register.php" target="_blank">注册</a></label>
    </div>
</div>
</body>
</html>
