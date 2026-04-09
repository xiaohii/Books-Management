<meta charset="UTF-8">
<?php
include("conn.php");
?>

<html>
<head>
<title>主页</title>
    <link href="bootstarp/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-warning{
            background-color: #d0455a;
        }
		 body {
            background: url("images/66.png")no-repeat;
        }
    </style>
</head>
<body>
<?php include("header.php");?>
<div class="container">
    <br>	
	     <h2 style="text-align: center">学生信息展示</h2>
    <br>
    <table class="table table-bordered table-hover" style="text-align: center">
        <tr class="info">
            <th>姓名</th>
            <th>学号</th>
            <th>宿舍号</th>
            <th>性别</th>
            <th>手机号</th>
            <th>班级</th>
            <th>操作</th>
        </tr>
        <?php
        $sql = "select * from `student` order by `id`";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {         // 若表中有数据
        $number = mysqli_num_rows($result);     // 取得数据笔数
        if(!isset($_GET['p']))
        {$p=0;}
        else {$p=$_GET['p'];}
        $check = $p + 8;                             // 每页抓取 8 笔数据
        for ($i = 0; $i < $number; $i++) {// 用来呈现多笔数据的循环
        $stu = mysqli_fetch_array($result);

        //选取第 $p 笔到 $check 笔数据
        if ($i >= $p && $i < $check) {
            echo "<tr>";
            echo "<td>{$stu['user']}</td>";
            echo "<td>{$stu['id']}</td>";
            echo "<td>{$stu['Dno']}</td>";
            echo "<td>{$stu['gender']}</td>";
            echo "<td>{$stu['phone']}</td>";
            echo "<td>{$stu['class']}</td>";
            echo "<td><a href='delete.php?id={$stu['id']}' class='btn btn-warning'>删除</a>
                      <a href='update3.php?id={$stu['id']}' class='btn btn-warning'>修改</a></td>";
            echo "</tr>";
            $j = $i+1;
            }
        }// for循环
        }
        ?>
    </table>
    <ul class="row pager" style="font-size: 16px;line-height: 30px">
        <li class="col-xs-2 col-xs-push-3">
            <!--- 将 p 值设为 0, 让模块从第一笔数据开始 ---->
            <a href="index.php?p=0">首页</a>
        </li>
        <li class="col-xs-2 col-xs-push-2" style="margin-left: 20px">
            <?php
            if ($p>7) { // 判断是否有上一页
                $last = (floor($p/8)*8)-8;
                echo "<a href='index.php?p=$last'>上一页</a>";
            }
            else
                echo "<a class='disabled'>上一页</a>";
            ?>
        </li>
        <li class="col-xs-2 col-xs-push-1" style="margin-left: 20px">
            <?php
            if ($i>7 and $number>$check) // 判断是否有下一页
                echo "<a href='index.php?p=$j'>下一页</a>";
            else
                echo "<a class='disabled'>下一页</a>";
            ?>
        </li>
        <li class="col-xs-2" style="margin-left: 30px">
            <?php
            if ($i>7) 
            {
                $final = floor($number/8)*8;
                echo "<a href='index.php?p=$final'>末页</a>";
            }
            else
                echo "<a class='disabled'>末页</a>";
            ?>
        </li>
    </ul>
</div>
</body>
</html>
