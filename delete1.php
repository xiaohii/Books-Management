<meta charset="UTF-8">
<?php
include "conn.php";
$id = $_GET['id'];
echo $id;
$sql = "delete from `wangui` where `id` = '{$id}'";
$stmt= $conn->query($sql);
if ($stmt > 0){
    echo "<script>alert('删除成功')</script>";
    echo "<script>window.location.href='wangui3.php'</script>";
}else {
    echo ("<script>alert('删除失败')</script>");
    echo ("<script>window.location.href='wangui3.php'</script>");
}
$conn->close();//关闭数据库
