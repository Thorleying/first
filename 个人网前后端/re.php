<?php
 $link=mysqli_connect('localhost:3306','after','030701','after'); 
 if(!$link){
     echo('数据库连接失败');
 }
if(!empty($_POST["selsub"])){
    $sn=$_POST["sn"];//拿到第一个变量
    $ss=$_POST["ss"];//拿到第二个变量
    $sa=$_POST["sa"];//拿到第三个变量
    $ps=$_POST["ps"];//拿到第四个变量
    $re=$_POST["re"];//拿到第五个变量
    //传入数据到数据库
    mysqli_query($link,"insert recomend (stuname,stusex,age,connection,recomend) values('$sn','$ss','$sa','$ps','$re')");
//添加成功后在缓存器前去存储一个成功的字符串
   // $_SESSION['yes']='添加成功!';
    header('location:recomend.php');//跳转到首页
    exit;
}
?>