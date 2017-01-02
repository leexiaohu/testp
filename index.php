<!DOCTYPE html>
<html lang="zh-ch">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" type="text/css" href="res/css/index.css">
    <script src="res/js/jquery-3.1.1.min.js"></script>
    <script src="res/js/main.js"></script>
    <!--<script src="res/js/index.js"></script>-->
</head>
<body>
<div class="main_page" >
    <div id="header">
        <div class="logo">
            <input type ="image" src="res/img/logo.png">
        </div>
        <div class="nav">
            <ul>
                <li><a class ="current" href="/index.php">Home</a></li>
                <li><a href="/part2/news.php">News</a></li>
                <li><a href="/part3/contact.php">Contact</a></li>
                <li><a href="/about.php">About</a></li>
            </ul></div>
        <div class = "search">
            <input type="text" placeholder="搜索">
            <input type="button" value="搜索">
        </div>

        <div class="login">
            <div class="logined">欢迎你：<a id="username" href="#">李全信</a></div>
            <div class="unlogin">
                <ul>
                    <li><a href="login.php" target="_blank">登录</a></li>
                    <li><a href="register.php">注册</a></li>
                </ul>
            </div>
        </div>

    </div>
    <div id="ft_pg">
        <div style="z-index: 1"></div>
        <div id="menuContent">
            <div class ="item"><a id ="" href="#"><span>猫咪</span><i class="icon-right">&gt;</i></a></div>
            <div class ="item"><a id ="" href="#"><span>狗狗</span><i class="icon-right">&gt;</i></a></div>
            <div class ="item"><a id ="" href="#"><span>爬虫</span><i class="icon-right">&gt;</i></a></div>
            <div class ="item"><a id ="" href="#"><span>水族</span><i class="icon-right">&gt;</i></a></div>
            <div class ="item"><a id ="" href="#"><span>火星族</span><i class="icon-right">&gt;</i></a></div>
            <div class ="item"><a id ="" href="#"><span>铲屎官</span><i class="icon-right">&gt;</i></a></div>
            <div class ="item"><a id ="" href="#"><span>我的爱狗</span><i class="icon-right">&gt;</i></a></div>
            <div class ="item"><a id ="" href="#"><span>我的爱猫</span><i class="icon-right">&gt;</i></a></div>
        </div>
        <div id="bannerContent">
            <a>
                <div class ="banner_img1 active">page1</div>
            </a>
            <a>
                <div class ="banner_img2">page2</div>
            </a>
            <a>
                <div class ="banner_img3">page3</div>
            </a>
        </div>
        <div id="pre_pg"><span >&lt;</span></div>
        <div id="next_pg"><span>&gt;</span></div>
        <div id="banner_dots">
            <span class="active"></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div id=""></div>
</div>

    <div class="footer">
        <div><h1>Footer</h1></div>
    </div>
</div>
</body>
</html>
