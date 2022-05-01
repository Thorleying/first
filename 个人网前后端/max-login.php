<?php
session_start();
$username=$_GET['username'];
$password=$_GET['password'];
    $con = mysqli_connect('localhost:3306', 'after', '030701','after');
    if (!$con) {
        die("连接失败: " . mysqli_connect_error());
    }
    $sql="select username,password from admirmax where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    $row= mysqli_fetch_assoc($result);
    if($row==0){
        echo "<script>alert('该超级管理员'+$username+'不存在');window.location='login.html';</script>";
    }else{
        echo "<script>alert('欢迎超级管理员'+$username);</script>";
    }
?>