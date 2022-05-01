<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>学习导航-评论区</title>
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
    <!-- 左边点击的栏框 -->
    <div class="side-nav-panel-left">
        <ul id="slide-out-left" class="side-nav side-nav-panel collapsible">
            <li class="profil"><img src="img/author.jfif" alt="">
                <h2>Thorleying</h2>
                <h6>一位热爱编程的人</h6>
            </li>
            <li class="li-top"><a href="index.html"><i class="fa fa-home"></i>主页</a></li>
            <li>
            </li>
            <li>
                <a href="javascript:;"><i class="fa fa-file-o"></i>评论区</a>
            </li>
            <li>
                <a href="information-col.html"><i class="fa fa-bold"></i>信息采集</a>
            </li>
            <li>
                <a href="school.php"><i class="layui-icon layui-icon-read"></i>全国高校官网大全</a>
            </li>
            <li><a href="login.html"><i class="layui-icon-user layui-icon"></i>管理员登录</a></li>
            <li><a href="max-login.html"><i class="layui-icon-username layui-icon"></i>超级管理员</a></li>
        </ul>
    </div>
    <div class="form-body">
        <h2 align="center" style="display:block;margin-top:70px">评论区模仿-----给站长的评论</h2>
        <hr>
        <style>
            label {
                color: black;
            }
            
            .a2 {
                display: block;
                margin: 0 auto;
            }
        </style>
        <form class="layui-form" action="re.php" method="post">
        <div class="layui-form-item">
            <label class="layui-form-label">用户名</label>
            <div class="layui-input-block">
                <input type="text" name="sn" lay-verify="required" placeholder="请输入姓名" autocomplete="off" class="layui-input uname" style='width:80%'>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">性别</label>
            <div class="layui-input-block">
                <input type="text" name="ss" lay-verify="required" placeholder="请输入性别" autocomplete="off" class="layui-input sex" style='width:80%'>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">年龄</label>
            <div class="layui-input-block">
                <input type="text" name="sa" lay-verify="required" placeholder="请输入年龄" autocomplete="off" class="layui-input age" style='width:80%'>
            </div>
        </div> 
        <div class="layui-form-item">
            <label class="layui-form-label">站长联系</label>
            <div class="layui-input-block">
                <input type="text" name="ps" lay-verify="required" placeholder="是否认识站长" autocomplete="off" class="layui-input number" style='width:80%'>
            </div>
        </div>
        <div class="layui-form-item">
        <label class="layui-form-label">你的评论:</label>
            <div class="layui-input-block">
            <textarea name="re" required lay-verify="required" placeholder="你的评论是什么" class="layui-textarea a1 message" style="width:80%"></textarea>
            </div>
        </div>
        <div class='allbtn' style='margin:0 auto;width:100%;'>
        <input type='submit' class="layui-btn btn" lay-submit lay-filter="formDemo" name="selsub" value="发布评论" style='margin-left:30%'>
        <input type="reset" class="layui-btn layui-btn-primary" value="重置">
        </div>
        <script>
        var uname = document.querySelector('.uname');
        var sex = document.querySelector('.sex');
        var number = document.querySelector('.number');
        var age = document.querySelector('.age');
        var message = document.querySelector('.message');
        var btn = document.querySelector('.btn');
        btn.addEventListener('click', function() {
            if (uname.value == "" && sex.value == "" && number.value == "" && message.value == "" && age.value == "") {} else {
                alert('评论成功，感谢评论！');
            }
        })
    </script>
    </form>
        <br>
        <hr>
        <h2 align="center">评论区内容</h2>
        <table class="layui-table">
        <thead>
            <tr>
                <th width="13%" align="center">楼层</th>
                <th>评论内容</th>
            </tr>
        </thead>
    </table>
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
    if(empty($_POST["selsub"])){
        $res=mysqli_query($link,"select * from recomend order by Id");//传全结果值
            }else{
                //那过来的数据
                $sel=$_POST["re"];
                $res=mysqli_query($link,"select * from recomend where Id like '%$sel%' or recomend like '%$sel%'");
            }//搜索框得到的结果值
            echo '<div class="center" style=" height:155px;overflow: scroll">';
            while ($row=mysqli_fetch_array($res)){
        echo '<table class="layui-table">';
        echo '<tbody>';
        echo '<tr style="">';
        echo"<td width='13%' style='text-align:center'>$row[0]</td><td width='87%' style='text-align:center'>$row[1]</td>
        ";
        echo '</tr>';
        echo '</tbody>';
echo'</table>';
}
echo'</div>';
///添加评论的值
?>
    </div>
    <script type="text/javascript" src="layui-v2.6.8/layui/layui.js"></script>
    </div>
    <div id="fakeLoader"></div>
    <!-- end loader -->
    <!-- footer -->
    <div class="footer" style="">
        <div class="container">
            <div class="copyright"><span>© 2022 学习导航 信息采集</span></div>
        </div>
    </div>
    <!-- end footer -->
    <!-- scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/fakeLoader.min.js"></script>
    <script src="js/main.js"></script>
    <script src="layui-v2.6.8/layui/layui.js"></script>
</body>
</html>