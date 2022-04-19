<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>删除记录</title>
</head>

<body>
<?php
//数据库连接
$link=mysqli_connect('localhost:3306','root','123456','stu');
if(!$link){
    excit('数据库连接失败');
}//缓存拿过来
session_start();
$del=$_SESSION['del'];
//mysqli_query($link,"delete from student where stuid=$row[0]");
mysqli_query($link,"delete from student where stuid=$del");
///添加成功的东西 开启session start（）
unset($_SESSION['del']);
header('location:my-school.php');
?>
</body>

</html>