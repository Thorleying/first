<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>学习导航-全国高校官网查询</title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/fakeLoader.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="layui-v2.6.8/layui/css/layui.css">
</head>

<body>
    <!-- navbar top -->
    <div class="navbar-top">
        <div class="side-nav-panel-left"><a href="#" data-activates="slide-out-left" class="side-nav-left"><i class="fa fa-bars"></i></a></div>
        <!-- site brand -->
        <div class="site-brand">
            <a href="index.html">
                <h1>学习导航</h1>
            </a>
        </div>
        <!-- end site brand -->
        <div class="side-nav-panel-right"><a href="contact.html" class="side-nav-right"><i class="fa fa-envelope-o"></i></a></div>
    </div>
    <!-- end navbar top -->
    <!-- 登陆左边的导航栏 -->
    <div class="side-nav-panel-left">
        <ul id="slide-out-left" class="side-nav side-nav-panel collapsible">
            <li class="profil"><img src="img/author.jfif" alt="">
                <h2>Thorleying</h2>
                <h6>一位热爱编程的人</h6>
            </li>
            <li class="li-top"><a href="index.html"><i class="fa fa-home"></i>主页</a></li>
            <li>
                <!-- <div class="collapsible-header"><i class="fa fa-shopping-cart"></i>Shop <span><i class="fa fa-caret-down"></i></span></div>
                <div class="collapsible-body">
                    <ul class="side-nav-panel">
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop-single.html">Shop Single</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div> -->
</li>
            <li>
                <a href="recomend.php"><i class="fa fa-file-o"></i>评论区</a>
            </li>
            <li>
                <a href="information-col.html"><i class="fa fa-bold"></i>信息采集</a>
            </li>
            <!-- <li><a href="about-us.html"><i class="fa fa-user"></i>About Us</a></li>
            <li><a href="contact.html"><i class="fa fa-envelope-o"></i>Contact Us</a></li> --> <li>
                <a href="school.php"><i class="layui-icon layui-icon-read"></i>全国高校官网大全</a>
            </li>
            <li><a href="login.html"><i class="layui-icon-user layui-icon"></i>管理员登录</a></li>
            <li><a href="max-login.html"><i class="layui-icon-username layui-icon"></i>超级管理员</a></li>
        </ul>
    </div>
    <div class="all">
        <h3 align="center" style="display:block;margin-top:10px">全国高校官网模块</h3>
       <form action="" method="post" style="display:block;margin-left:20%;margin-top:10px"><input type="text" name="sel" placeholder="搜索" style="width:60%;height:30px;border-right:none"><input type="submit" value="搜索" name="selsub" style="height:30px;line-height:30px;background-color:#212f3d;color:white;font-weight:bold" class="layui-btn layui-btn-primary"></form>
        <a href="add-school.html" style="top:65px;position:absolute;right:5px" ><button class="layui-btn layui-btn-xs">添加学校</button></a>
        <br>

        <?php
            //如果insert.php中的session有这个缓存
            if(isset($_SESSION['yes'])){//如果存在这个缓存
                echo $_SESSION['yes'];//输出这个缓存
                //干掉$_SESSION['yes']
                unset ($_SESSION['yes']);//扔掉这个缓存
            }
            $link=mysqli_connect('localhost:3306','after','030701','after'); 
            if(!$link){
                excit('数据库连接失败');
            }
            // 搜索框的功能
            if(empty($_POST["selsub"])){
                $res=mysqli_query($link,"select * from school order by Id");//传全结果值
                    }else{
                        //那过来的数据
                        $sel=$_POST["sel"];
                        $res=mysqli_query($link,"select * from school where Id like '%$sel%' or name like '%$sel%' or schoolname like '%$sel%' or recomend like '%$sel%'");
                    }//搜索框得到的结果值
                    echo "<div class='row' style='height:600px;overflow:scroll;margin-top:-10px'>";
                while ($row=mysqli_fetch_array($res)){
                echo '<div class="layui-card" style="width: 48%;float:left;margin-left:1%;height:200px;overflow:hidden; display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp:6;border:solid 1px #212f3d;border-radius:5px;">';
                echo"<div class='layui-card-header' style='overflow:hidden;white-space: nowrap;text-overflow: ellipsis;background-color:#212f3d;border-radius:5px;color:white'>高校:$row[2] </div><a href='$row[4]'><div class='layui-card-body'>学校介绍:$row[3](点击可进入官网)</div></a>
                ";
        echo'</div>';
        }
        ?>
    </div>
    <!-- 底部 -->
    <div class="footer">
        <div class="container">
            <div class="copyright"><span>© 2022 学习导航 高校官网</span></div>
        </div>
    </div>
    <!-- end footer -->
    <!-- scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/fakeLoader.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>