<?php
include "conn.php";//包含conn.php文件
$user = $_POST['user'];//提交姓名
$id = $_POST['id'];//提交学生id
$Dno = $_POST['Dno'];//提交宿舍号
$date = $_POST['date'];//提交晚归时间
$Nback = $_POST['Nback'];//提交未归

$rows = "select `id` from `student` where `id` = '{$id}' and `user` = '{$user}'";
$stmt1= $conn->query($rows);
$row = mysqli_num_rows($stmt1);
if ($row != 1){
    echo "<script>alert('学号不可改变，请重新输入！')</script>";
    echo ("<script>window.location.href='index.php'</script>");
}else{
    $sql = "update `student` set `user` = '{$user}',`gender` = '{$gender}','Dno'='{$Dno}'`phone` = '{$phone}',`class` = '{$class}' where `id` = '{$id}'";
    $stmt= $conn->query($sql);
    if ($stmt > 0){
        echo ("<script>alert('修改成功')</script>");
        echo ("<script>window.location.href='index.php'</script>");
    }else {
        echo ("<script>alert('修改失败')</script>");
        echo ("<script>window.location.href='index.php'</script>");
    }
}

$conn->close();

