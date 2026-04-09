<meta charset="UTF-8">
<?php
session_start();
include "conn.php";
$user = $_POST['user'];
$id = $_POST['id'];
$Dno = $_POST['Dno'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$class = $_POST['class'];

$rows = "select `id` from `student` where `id` = '{$id}'";
$stmt1= $conn->query($rows);
$row = mysqli_num_rows($stmt1);
if ($row == 1){
    echo "<script>alert('此学号已存在，请重新输入！')</script>";//script 前端弹窗
    echo ("<script>window.location.href='add.php'</script>");
}else{
    $sql = "insert into `student` (user,id,Dno,gender,phone,class) value ('{$user}','{$id}','{$Dno}','{$gender}','{$phone}','{$class}')";
    $stmt= $conn->query($sql);
    if ($stmt > 0){
        echo ("<script>alert('添加成功')</script>");
        echo ("<script>window.location.href='index.php'</script>");
    }else {
        // echo $sql;
        echo ("<script>alert('添加失败')</script>");
        echo ("<script>window.location.href='index.php'</script>");
    }
}

$conn->close();
