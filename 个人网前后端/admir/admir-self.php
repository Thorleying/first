<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>学习导航-管理员登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link rel="stylesheet" href="../css/materialize.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.transitions.css">
    <link rel="stylesheet" href="../css/fakeLoader.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.png">
    <link rel="stylesheet" href="../layui-v2.6.8/layui/css/layui.css">
</head>

<body>
    <!-- navbar top -->
    <div class="navbar-top">
        <div class="side-nav-panel-left"><a href="#" data-activates="slide-out-left" class="side-nav-left"><i class="fa fa-bars"></i></a></div>
        <!-- site brand -->
        <div class="site-brand">
            <a href="admir.php">
                <h1>后台管理</h1>
            </a>
        </div>
        <!-- end site brand -->
        <div class="side-nav-panel-right"></div>
    </div>
    <!-- end navbar top -->
    <!-- 登陆左边的导航栏 -->
    <div class="side-nav-panel-left">
        <ul id="slide-out-left" class="side-nav side-nav-panel collapsible">
            <li class="profil"><img src="../img/author.jfif" alt="">
<!--                <h2>管理员</h2>-->
                <h6 style="color: white">管理员:<?php session_start();echo $_SESSION['username'];?></h6>
            </li>
            <li class="li-top"><a href="admir.php"><i class="fa fa-home"></i>管理员首页</a></li>
            <li>
            </li>
            <li>
                <a href="recomend-admir.php"><i class="fa fa-file-o"></i>评论区后台数据</a>
            </li>
            <li>
                <a href="information-admir.php"><i class="fa fa-bold"></i>信息采集后台数据</a>
            </li>
            <!-- <li><a href="about-us.html"><i class="fa fa-user"></i>About Us</a></li>
            <li><a href="contact.html"><i class="fa fa-envelope-o"></i>Contact Us</a></li> -->
            <li><a href="contact-admir.php"><i class="layui-icon-user layui-icon"></i>用户反馈后台数据</a></li>
            <li>
                <a href="school-admir.php"><i class="layui-icon layui-icon-read"></i>全国高校后台数据</a>
            </li>
            <li>
                <a href="admir-self.php"><i class="layui-icon layui-icon-username"></i>个人</a>
            </li>
             <li><a href="login-out.php"><i class="layui-icon-username layui-icon"></i>退出登录</a></li>
        </ul>
    </div>
    <div class="container" style="height:400px">
    <form action="" method="post" name="indexf">
<div class="infor" style="width:100%;height:600px;margin:0 auto">
<h2 align="center" style="padding-top:20px">管理员个人资料</h2>
<hr>
<p style="padding-left:20px">管理员账号<input type="text" value="<?php echo $_SESSION['username'];?>" style="width:70%" disabled></p><br>
<p style="padding-left:20px">管理员密码<input type="text" value="<?php echo $_SESSION['password'];?>" style="width:70%" disabled name="sel"></p><br>
</div>
</form>
    </div>
    <div class="footer" style="margin-top:200px">
        <div class="container">
            <div class="copyright"><span>© 2022 学习导航 管理员后台</span></div>
        </div>
    </div>
    <!-- scripts -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/fakeLoader.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>