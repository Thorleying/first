<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>学习导航后台-信息采集数据</title>
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
                <h2 style="color: white">管理员:</h2>
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
                <a href="school-admir.php"><i class="layui-icon layui-icon-read"></i>全国高校官网大全</a>
            </li>
            <!-- <li><a href=""><i class="layui-icon-username layui-icon"></i>未完待续</a></li> -->
        </ul>
    </div>
    <h3 align="center">信息采集系统数据</h3>
    <div class="layui-body" style="left:0;height:750px;border:solid 1px #212f3d;overflow:scroll">
        <form action="" method="post" name="indexf">
    <!-- <p align="center"><input type="button" value="新增" name="inbut" onclick="location.href='insert1.php'" class='layui-btn layui-btn-xs' lay-event='edit'></p> -->
    
    <table class="layui-table">
                    <thead>
                        <tr>
        <th width="18%">姓名</th>
        <th width="20%">学号</th>
        <th width="20%">班级</th>
        <th width="42%">操作</th>
                        </tr>
                    </thead>
    <?php
    //开启缓存
session_start();
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
$res=mysqli_query($link,"select * from information order by Id");//传全结果值
    }else{
        //那过来的数据
        $sel=$_POST["sel"];
        $res=mysqli_query($link,"select * from information where Id like '%$sel%' or stuname like '%$sel%' or numbers like '%$sel%' or classes like '%$sel%'");
    }//搜索框得到的结果值
    while ($row=mysqli_fetch_array($res)){
echo '<tr align="center" style="text-align:center">';
echo"<td style='text-align:center'>$row[1]</td><td style='text-align:center'>$row[3]</td><td style='text-align:center'>$row[4]</td>
<td style='text-align:center'>
<input type='submit' value='编辑' class='layui-btn layui-btn-xs' lay-event='edit' name='upsub$row[0]' style=''>
    <input type='submit' value='删除' class='layui-btn layui-btn-danger layui-btn-xs' lay-event='del' name='delsub$row[0]'>
</td>
";
echo '</tr>';
//修改功能
        if(!empty($_POST["upsub$row[0]"])){
            echo '<tr align="center">';
            echo "
 <td><input type='text' name='upsn' value='$row[1]' class='layui-input' style='width:100%'> </td>
 <td><input type='text' name='upsw' value='$row[3]' class='layui-input' style='width:100%'> </td>
<td><input type='text' name='upsr' value='$row[4]' class='layui-input' style='width:100%'> </td>
<td style='text-align:center'><input type='submit' value='确认修改' name='upsubs$row[0]' class='layui-btn layui-btn-xs' lay-event='edit'></td>";
            echo '</tr>';
        }
        //信息采集修改功能
 ob_start();
        if(!empty($_POST["upsubs$row[0]"])){
            $upsn=$_POST["upsn"];
            $upsw=$_POST["upsw"];
            $upsr=$_POST["upsr"];
            //填入数据
            mysqli_query($link,"update information set stuname='$upsn',numbers='$upsw',classes='$upsr' where Id=$row[0]");
        header('location:#');
        exit;
        }
        //先判断是否点击
        if(!empty($_POST["delsub$row[0]"])){
//            mysqli_query($link,"delete from student where stuid=$row[0]");
//            header('location:#');
            $_SESSION['del']=$row[0];
            echo '<script>
if(confirm("是否删除")==true){
    location.href="information-admir-del.php";
}
</script>';
        }
    }
    ?>
</table>
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