<meta charset="UTF-8">
<?php
session_start(); //初始化session
include "conn.php";
$user = $_POST['user'];//向服务器上传输数据
$pwd = $_POST['pwd'];
$sql = "SELECT * FROM `admin` WHERE `name` = '{$user}' and `pwd` = '{$pwd}' ";

$stmt= $conn->query($sql);//向数据库发送一条 MySQL 查询
$result = mysqli_fetch_array($stmt);//函数从结果集中取得一行作为关联数组，或数字数组

if($stmt->num_rows > 0){
    $_SESSION['user'] = $result[0];
    echo "<script>alert(\"登录成功！\")</script>";
    echo "<script>window.location.href='index.php'</script>";

}else{
    echo "<script>alert(\"账号或密码错误，请重新输入！\")</script>";
    echo "<script>window.location.href='login.html'</script>";
}