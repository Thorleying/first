<?php
$link=mysqli_connect('localhost:3306','after','030701','after'); 
if(!$link){
    echo('数据库连接失败');
}
session_unset();//Free all session variables
session_destroy();//销毁一个会话中的全部数据
setcookie(session_name(),'',time()-3600,'/');//销毁保存在客户端的卡号（session id）
header('Location:../login.html');
?>