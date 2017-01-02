<!DOCTYPE html>
<html lang="zh-ch">
<head>
    <meta charset="UTF-8">
    <title>news</title>
    <link rel="stylesheet" type="text/css" href="../res/css/style.css">
    <script src="../res/js/jquery-3.1.1.min.js"></script>
    <script src="res/js/index.js"></script>

</head>
<body>
<div class="main_page">
    <div class="header">
        <div style="width: 195px;">
            <input style ="margin-left:60px;" type="image" src="../res/img/logo.png">
        </div>
        <div>
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a class ="current" href="/part2/news.php">News</a></li>
                <li><a href="/part3/contact.php">Contact</a></li>
                <li><a href="/about.php">About</a></li>
            </ul></div>
        <div style="float:left;margin-left:20px;">
            <input type="text" placeholder="搜索" style="margin-top:15px;width:200px">
            <input type="button" value="搜索">
        </div>

        <div style="position:fixed;top:20px;right:20px;">
            <div style="float:left; font-size:15px;" id="puser">欢迎你：<span style="color:red" id="username"></span></div>
            <div style="float:left; font-size:15px;" id="plogin"><strong>登录</strong></div>
        </div>
    </div>

    <div class="main_content">
        <div id="left_side">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div id="mid_side">

            <div class="main">
                <h1>main</h1>
                <input type="image" src="../res/img/photo.jpeg">
            </div>
            <div class="main">
                <h1>main</h1>
                <input type="image" src="../res/img/photo.jpeg">
            </div>
            <div class="main">
                <h1>main</h1>
                <input type="image" src="../res/img/photo.jpeg">
            </div>
            <div class="main">
                <h1>main</h1>
                <input type="image" src="../res/img/photo.jpeg">
            </div>
            <div class="main">
                <h1>main</h1>
                <input type="image" src="../res/img/photo.jpeg">
            </div>
            <div class="main">
                <h1>main</h1>
                <input type="image" src="../res/img/photo.jpeg">
            </div>
        </div>
        <div id="right_side">
            <div>
                时间：<input type="text" id="text_timer" style="margin-bottom:15px">
                <input type="button" id="btn_timer" onclick="startTime()" value="打开时钟">
                <input type="button" id="close_timer" onclick="endTime()" value="关闭时钟">
            </div>
        </div>
    </div>

    <div class="footer">
        <div><h1>Footer</h1></div>
    </div>
</div>
</body>
</html>
