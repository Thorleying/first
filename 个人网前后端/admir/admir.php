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
            <a href="">
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
    <h3 style="padding-top:30px;font-weight: 900;" align="center">-管理员后台数据管理-</h3>
    <hr>
    <style>
    .layui-panel{
        cursor: pointer;
    }
    </style>
   <style>
        .action {
            width: 200px;
            height: 90px;
            /* border: solid 1px pink; */
            display: flex;
            margin: 15% auto;
        }
        
       .action span {
            flex: 1;
            background-color: #212f3d;
            margin-right: 10px;
            box-sizing: border-box;
            text-align: center;
            border-radius: 50%;
            cursor: pointer;
        }
        
        .wenzi {
            color: white;
        }
    </style>
    <div class="action">
        <span><a href="recomend-admir.php"><i class="layui-icon-reply-fill layui-icon" style="font-size:50px;line-height:55px;text-align:center;color:white"></i><p class="wenzi">评论区</p></a></span>
        <span><a href="information-admir.php"><i class="layui-icon-file layui-icon" style="font-size:50px;line-height:55px;text-align:center;color:white"></i><p class="wenzi">信息采集</p></a></span>
    </div>
    <div class="action" style="margin-top:10%">
        <span><a href="school-admir.php"><i class="layui-icon-transfer layui-icon" style="font-size:50px;line-height:55px;text-align:center;color:white"></i><p class="wenzi">高校官网</p></a></span>
        <span><a href="contact-admir.php"><i class="layui-icon-email layui-icon" style="font-size:50px;line-height:55px;text-align:center;color:white"></i><p class="wenzi">用户反馈</p></a></span>
    </div>
    <div class="action alert" style="margin-top:10%">
        <span><i class="layui-icon-transfer layui-icon" style="font-size:50px;line-height:55px;text-align:center;color:white"></i><p class="wenzi">未开通</p></span>
        <span><i class="layui-icon-email layui-icon" style="font-size:50px;line-height:55px;text-align:center;color:white"></i><p class="wenzi">未开通</p></span>
    </div>
    <div class="footer" style="margin-top:200px">
        <div class="container">
            <div class="copyright"><span>© 2022 学习导航 管理员后台</span></div>
        </div>
    </div>
    <script src="../layui-v2.6.8/layui/layui.js"></script>
    <script>
        var btn=document.querySelector('.alert');
        btn.addEventListener('click',function(){
            layer.open({
  title: '站长提示'
  ,content: '该选区未开通'
});     
  
        })
    </script>
    <!-- scripts -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/fakeLoader.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>