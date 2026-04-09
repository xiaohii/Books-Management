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
    <h2 style="text-align: center">晚归登记</h2>
    <br>

<div>
    <form action="wangui2.php" method="post" class="form-horizontal" role="form">
        <div class="form-group">
            <label for="name" class="control-label col-xs-2">姓名</label>
            <div class="col-xs-8">
                <input id="name" type="text" name="user" class="form-control" placeholder="请输入学生的姓名" required>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="id" class="control-label col-xs-2">学号</label>
            <div class="col-xs-8">
                <input id="id" type="text" name="id" class="form-control" placeholder="请输入学生的学号" required>
            </div>
        </div>
        <br>

        <div class="form-group">
            <label for="id" class="control-label col-xs-2">宿舍号</label>
            <div class="col-xs-8">
                <input id="id" type="text" name="Dno" class="form-control" placeholder="请输入学生的宿舍号" required>
            </div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <label for="date" class="control-label col-xs-2">晚归时间</label>
            <div class="col-xs-8">
                <input id="date" type="text" name="date" class="form-control" placeholder="请输入晚归时间" required>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="Nback" class="control-label col-xs-2">未归</label>
            <div class="col-xs-8">
                <input id="Nback" type="text" name="Nback" class="form-control" placeholder="请输入是否" required>
            </div>
        </div>
        <br>
		<div class="form-group">
            <label for="Nback" class="control-label col-xs-2">备注</label>
            <div class="col-xs-8">
                <input id="Nback" type="text" name="beizu" class="form-control" placeholder="请输入补充内容" required>
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





