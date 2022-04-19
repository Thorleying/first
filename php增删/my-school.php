<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生信息首页php</title>
</head>
<body>
<h1 align="center">学生信息</h1>
<form action="" method="post" name="indexf">
    <p align="center"><input type="button" value="新增" name="inbut" onclick="location.href='insert.php'"></p>
    <p align="center"><input type="text" name="sel" placeholder="搜索"><input type="submit" value="搜索" name="selsub"> </p>
<table align="center" border="1px" cellspacing=0px" width="800px">
    <tr>
        <th>学号</th>
        <th>姓名</th>
        <th>性别</th>
        <th>年龄</th>
        <th>操作</th>
    </tr>
    <?php
    //开启缓存
    session_start();
    //如果insert.php中的session有这个缓存
    if(isset($_SESSION['yes'])){//如果存在这个缓存
        echo $_SESSION['yes'];//输出这个缓存
        //干掉$_SESSION['yes']
        unset ($_SESSION['yes']);//扔掉这个缓存
    }
    $link=mysqli_connect('localhost:3306','root','123456','stu'); 
    if(!$link){
        excit('数据库连接失败');
    }
    //如果没有点击
    if(empty($_POST["selsub"])){
$res=mysqli_query($link,"select * from student order by stuid");//传全结果值
    }else{
        //那过来的数据
        $sel=$_POST["sel"];
        $res=mysqli_query($link,"select * from student where stuid like '%$sel%' or stuname like '%$sel%' or stusex like '%$sel%' or age like '%$sel%'");
    }//搜索框得到的结果值
    while ($row=mysqli_fetch_array($res)){
echo '<tr align="center">';
echo"<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
<td>
<input type='submit' name='upsub$row[0]' value='修改'>
<input type='submit' name='delsub$row[0]' value='删除'>
</td>
";
echo '</tr>';
//修改功能
        if(!empty($_POST["upsub$row[0]"])){
            echo '<tr align="center">';
            echo "<td>$row[0]</td>
 <td><input type='text' name='upsn' value='$row[1]'> </td>
<td><input type='text' name='upss' value='$row[2]'> </td>
<td><input type='text' name='upsa' value='$row[3]'> </td>
<td><input type='submit' value='确认修改' name='upsubs$row[0]'></td>";
            echo '</tr>';
        }
        //点击确认按钮执行修改
        if(!empty($_POST["upsubs$row[0]"])){
            $upsn=$_POST["upsn"];
            $upss=$_POST["upss"];
            $upsa=$_POST["upsa"];
            //填入数据
            mysqli_query($link,"update student set stuname='$upsn',stusex='$upss',age='$upsa' where stuid=$row[0]");
        header('location:#');
        }
        //删除功能
        //先判断是否点击
        if(!empty($_POST["delsub$row[0]"])){
//            mysqli_query($link,"delete from student where stuid=$row[0]");
//            header('location:#');
            $_SESSION['del']=$row[0];
            echo '<script>
if(confirm("是否删除")==true){
    location.href="alert.php";
}
</script>';
        }
    }
    ?>
</table>
</form>
</body>
</html>