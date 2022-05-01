<?php
    session_start();
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
    if(!empty($_POST["selsub"])){
        $sn=$_POST["sn"];//拿到第一个变量
        $gn=$_POST["gn"];//拿到第二个变量
        $ss=$_POST["ss"];//拿到第二个变量
        $sa=$_POST["sa"];//拿到第三个变量
        // $sp=$_POST["sp"];//拿到第三个变量
        //传入数据到数据库
        mysqli_query($link,"insert school (name,schoolname,recomend,a) values('$sn','$gn','$ss','$sa')");
    //添加成功后在缓存器前去存储一个成功的字符串
       // $_SESSION['yes']='添加成功!';
        header('location:school.php');//跳转到首页
    }
    ?>