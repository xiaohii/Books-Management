<meta charset="UTF-8">
<?php
include "conn.php";
$user = $_POST['user'];//提交姓名
$id = $_POST['id'];
$Dno = $_POST['Dno'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$class = $_POST['class'];

$rows = "select * from `student` where id= '{$id}' and user= '{$user}'";
$stmt1= $conn->query($rows);
$row = mysqli_num_rows($stmt1);
if ($row != 1){
    echo "<script>alert('学号或名字不可改变，请重新输入！')</script>";
    echo ("<script>window.location.href='index.php'</script>");
    // echo $rows;
}else{
    $sql = "update student set user = '{$user}',Dno='{$Dno}',gender = '{$gender}',phone = '{$phone}',class = '{$class}' where id = '{$id}'";
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

