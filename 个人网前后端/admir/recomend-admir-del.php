<?php
//数据库连接
$link=mysqli_connect('localhost:3306','after','030701','after');
if(!$link){
    excit('数据库连接失败');
}//缓存拿过来
session_start();
$del=$_SESSION['del'];
//mysqli_query($link,"delete from student where stuid=$row[0]");
mysqli_query($link,"delete from recomend where Id=$del");
///添加成功的东西 开启session start（）
unset($_SESSION['del']);
header('location:recomend-admir.php');
?>