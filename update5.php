<meta charset="UTF-8">
<?php
include("conn.php");
$sql = "SELECT * FROM wangui WHERE id =".$_GET['id'];
$stmt = $conn->query($sql);//返回预处理对象
$stu = $stmt->fetch_array(MYSQLI_ASSOC);//返回结果集为数组
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主页</title>
    <link href="bootstarp/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css1.css" rel="stylesheet">
	<style>
	            body {
            background: url("images/66.png")no-repeat;
        }
	</style>
</head>
<body>
<?php include("header.php");?>
<div class="container">
    <br>
    <h2 style="text-align: center">学生考勤信息修改</h2>
    <br>
    <div>
        <form action="update4.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="user" class="control-label col-xs-2">姓名</label>
                <div class="col-xs-8">
                    <input id="user" type="text" name="user" class="form-control" value="<?php echo $stu['user']?>" placeholder="请输入学生的姓名" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="id" class="control-label col-xs-2">学号</label>
                <div class="col-xs-8">
                    <input id="id" type="text" name="id" class="form-control" value="<?php echo $stu['id']?>" placeholder="请输入学生的学号" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="Dno" class="control-label col-xs-2">宿舍号</label>
                <div class="col-xs-8">
                    <input id="Dno" type="text" name="Dno" class="form-control" value="<?php echo $stu['Dno']?>" placeholder="请输入学生的宿舍号" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="date" class="control-label col-xs-2">晚归时间</label>
                <div class="col-xs-8">
                    <input id="date" type="text" name="date" class="form-control" value="<?php echo $stu['date']?>" placeholder="请输入学生的宿舍号" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="Nback" class="control-label col-xs-2">未归</label>
                <div class="col-xs-8">
                    <input id="Nback" type="text" name="Nback" class="form-control" value="<?php echo $stu['Nback']?>" placeholder="请输入学生的宿舍号" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="beizu" class="control-label col-xs-2">备注</label>
                <div class="col-xs-8">
                    <input id="beizu" type="text" name="beizu" class="form-control" value="<?php echo $stu['beizu']?>" placeholder="请输入学生的班级" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-xs-2 col-xs-offset-4">
                    <input style="padding: 10px 50px" class="btn btn-success" type="submit" value="提交">
                </div>
                <div class="col-xs-2">
                    <input type="reset" style="padding: 10px 50px" class="btn btn-primary" value="重置">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>





