<?php
$username=$_GET['username'];
$password1=$_GET['password1'];
if($username==null or $password1==null){
    echo "<script>alert('用户名或密码不能为空，请重新输入!');window.location='login.html'</script>";
}
else{
    $con = mysqli_connect('localhost:3306', 'root', '123456','stu');
    if (!$con) {
        die("连接失败: " . mysqli_connect_error());
    }
//    echo "数据库连接成功";
    $sql="select username,password1 from stu where username='$username' and password1='$password1'";
    $result=mysqli_query($con,$sql);
    $row= mysqli_fetch_assoc($result);
    if($row){
        //echo "登录成功，欢迎你$username";
        echo "<script>alert('登陆成功欢迎您$username');</script>";
    }
//    $sql =$con->query("select username from stu where username='$username'");
//    $row=mysqli_fetch_assoc($sql);
    if($row==0){
        echo "<script>alert('您还没有注册呢!点击带你注册！');window.location='注册.html';</script>";
    }
    else{
//        echo "密码错误，请重新输入密码";
        echo "<script>alert('密码错误,请重新登录'); window.location='login.html';</script>";
    }
}
?>