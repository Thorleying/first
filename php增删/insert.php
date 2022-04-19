<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增学生记录</title>
</head>

<body>
<h1 align="center">新增学生记录</h1>
<form action="" method="post" name="inf">
<p align="center">学生名字:<input type="text" name="sn"></p>
    <p align="center">学生性别:<input type="text" name="ss"></p>
    <p align="center">学生年龄:<input type="text" name="sa"></p>
    <p align="center"><input type="submit" name="insub" value="提交"></p>
</form>
<?php
//开启缓存
session_start();
$link=mysqli_connect('localhost:3306','root','123456','stu');
if(!$link){
    excit('数据库连接失败');
}
if(!empty($_POST["insub"])){
    $sn=$_POST["sn"];//拿到第一个变量
    $ss=$_POST["ss"];//拿到第二个变量
    $sa=$_POST["sa"];//拿到第三个变量
    //传入数据到数据库
    mysqli_query($link,"insert student (stuname,stusex,age) values('$sn','$ss','$sa')");
//添加成功后在缓存器前去存储一个成功的字符串
    $_SESSION['yes']='添加成功!';
    header('location:my-school.php');//跳转到首页
}
?>
</body>

</html>
