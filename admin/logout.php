<?php
include_once "core_mysql.php";
unset($_SESSION['adminName']);
session_destroy();
echo "<script>alert('已经清除登录账户数据！');window.location.href='login.html'</script>";