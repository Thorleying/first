<?php
 $link=mysqli_connect('localhost:3306','after','030701','after'); 
 if(!$link){
     echo('数据库连接失败');
 }
if(!empty($_POST["selsub"])){
    $name=$_POST["name"];//拿到第一个变量
    $email=$_POST["email"];//拿到第二个变量
    $object=$_POST["object"];//拿到第三个变量
    $message=$_POST["message"];//拿到第四个变量
    //传入数据到数据库
    mysqli_query($link,"insert contact (name,email,object,message) values('$name','$email','$object','$message')");
//添加成功后在缓存器前去存储一个成功的字符串
   // $_SESSION['yes']='添加成功!';
   header('location:contact.html');//跳转到首页
   exit;
}
?>