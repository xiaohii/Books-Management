<meta charset="UTF-8">
<?php
include("conn.php");
session_start();
?>

<html>
<head>
    <title>主页</title>
    <link href="css/css1.css" rel="stylesheet">
    <link href="bootstarp/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        button {
            top: 7px;
            right: 15px;
        }
        th{
            text-align: center;
        }
        .container{
            width: 1200px;
        }
        .row{
            line-height: 50px;
        }
        .btn-warning{
            background-color: #d0455a;
        }
		
    </style>
</head>
<body>
    <!-- 定义一个盒子来装整个系统的页面以及选项 session数组进行读取。注册页面中的session-->
<div class="container">
    <div class="row" style="background-color: #2e7ad5;color: white">
        <div style="font-size: 20px" class="col-xs-4">学生考勤管理系统</div>
        <a href="index.php"><span class="col-xs-1">学生信息</span></a>
        <a href="select.php"><span class="col-xs-1">查询学生</span></a>
        <a href="add.php"><span class="col-xs-1">新生入住</span></a>
        <a href="wangui.php"><span class="col-xs-1">晚归登记</span></a>
		<a href="wangui3.php"><span class="col-xs-1">晚归登记表</span></a>
        <span class="col-xs-1" style="width: 120px;"  >管理员：<?php echo $_SESSION['user']?></span>
        <a href="login.html"><span class="col-xs-1">退出</span></a> 
    </div>
</div>
</body>
</html>