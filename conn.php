<meta charset="UTF-8">
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$tab = "work1";

// 创建连接
//          所连接的 主机名      用户名       登陆密码   数据库
$conn = new mysqli($servername, $username, $password,$tab);//创建数据库连接
$conn->query("SET NAMES 'UTF8'");// 数据库服务器进行数据传送时要使用的默认字符集

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}



