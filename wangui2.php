<meta charset="UTF-8">
<?php
include "conn.php";
$user = $_POST['user'];//提交姓名
$id = $_POST['id'];
$Dno = $_POST['Dno'];
$date = $_POST['date'];
$Nback = $_POST['Nback'];
$beizu = $_POST['beizu'];

$rows = "select `id` from `wangui` where `id` = '{$id}'";
$stmt1= $conn->query($rows);
$row = mysqli_num_rows($stmt1);
if ($row == 1){
    echo "<script>alert('此学号已存在，请重新输入！')</script>";//前端弹窗
    echo ("<script>window.location.href='wangui.php'</script>");
}else{
    $sql = "insert into `wangui` (`user`,`id`,`Dno`,`date`,`Nback`,`beizu`) value ('{$user}','{$id}','{$Dno}','{$date}','{$Nback}','{$beizu}')";
    $stmt= $conn->query($sql);
    if ($stmt > 0){
        echo ("<script>alert('添加成功')</script>");
        echo ("<script>window.location.href='index.php'</script>");
    }else {
        echo ("<script>alert('添加失败  ')</script>");
        echo ("<script>window.location.href='index.php'</script>");
    }
}

$conn->close();

