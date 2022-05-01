<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>学习导航-高校管理后台</title>
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
    <div class="all" style="width:100%;height:900px;">
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
                <h2>管理员</h2>
                <h6><?php session_start();echo $_SESSION['username'];?></h6>
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
            <!-- <li><a href=""><i class="layui-icon-username layui-icon"></i>未完待续</a></li> -->
        </ul>
    </div>
    <h3 align="center" style="margin-top:5px">高校官网数据</h3>
    <div class="layui-body" style="left:0;height:750px;overflow:scroll">
        <form action="" method="post" name="indexf">
    <!-- <p align="center"><input type="button" value="新增" name="inbut" onclick="location.href='insert1.php'" class='layui-btn layui-btn-xs' lay-event='edit'></p> -->
    <?php
    //开启缓存
    // session_start();
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
    //如果没有点击
    if(empty($_POST["selsub"])){
$res=mysqli_query($link,"select * from school order by Id");//传全结果值
    }else{
        //那过来的数据
        $sel=$_POST["sel"];
        $res=mysqli_query($link,"select * from school where Id like '%$sel%' name like '%$sel%' or schoolname like '%$sel%' a like '%$sel%' or recomend like '%$sel%'");
    }//搜索框得到的结果值
    while ($row=mysqli_fetch_array($res)){
        echo '<div class="layui-card" style="width: 48%;float:left;margin-left:1%;height:200px;overflow:hidden; display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp:6;border:solid 1px #212f3d;border-radius:5px;position:relative;margin-top:10px">';
        echo"<div class='layui-card-header' style='overflow:hidden;white-space: nowrap;text-overflow: ellipsis;background-color:#212f3d;border-radius:5px;color:white'>$row[2]  <input type='submit' value='删除' class='layui-btn layui-btn-danger layui-btn-xs' lay-event='del' name='delsub$row[0]' style='position:absolute;right:0;top:8px'> </div><a href='$row[4]'><div class='layui-card-body'>学校介绍:$row[3](点击可进入官网)</div></a>
        ";
echo'</div>';
        //先判断是否点击
        if(!empty($_POST["delsub$row[0]"])){
//            mysqli_query($link,"delete from student where stuid=$row[0]");
//            header('location:#');
            $_SESSION['del']=$row[0];
            echo '<script>
if(confirm("是否删除")==true){
    location.href="school-admir-del.php";
}
</script>';
        }
    }
    ?>
</form>
</div>
    <div class="footer" style="bottom:0">
        <div class="container">
            <div class="copyright"><span>© 2022 学习导航 管理员后台</span></div>
        </div>
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