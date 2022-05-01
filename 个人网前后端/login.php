<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="layui-v2.6.8/layui/css/layui.css">
 <script src="layui-v2.6.8/layui/layui.js"></script>
<body>
<?php
session_start();
$username=$_GET['username'];
$password=$_GET['password'];
$con = mysqli_connect('localhost:3306', 'after', '030701','after');
if (!$con) {
    die("连接失败: " . mysqli_connect_error());
}
$sql="select username,password from admirs where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
$row= mysqli_fetch_assoc($result);
if($row==0){
    echo "<script>layer.open({
        title: '本站提示'
        ,content: '管理员账号错误'
      });setTimeout(()=>{
        window.location = 'login.html';
      },1500)</script>";
}else{
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    echo "<script>layer.open({
        title: '本站提示'
        ,content: '管理员登陆成功.正在跳转...'
      });setTimeout(()=>{
        window.location = 'admir/admir.php';
      },1000)</script>";
}
?>
</body>

</html>