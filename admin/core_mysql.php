<?php
$host = 'localhost';
$user = 'rooter';
$password = '123456';
$db = 'cloud_signin';

//$conn 数据库连接操作
$mysqli = new mysqli($host, $user, $password, $db);
if ($mysqli->connect_errno) {
die($mysqli->connect_error);
}
$mysqli->set_charset('utf8');

//启用session
session_start();
