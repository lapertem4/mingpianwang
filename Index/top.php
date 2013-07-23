<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Top 栏</title>
<link rel="stylesheet" type="text/css" href="../public/css/index.css">
</head>

<body>
	<div class="top">
		<div class="top_left_3">&nbsp;</div>
		<div class="top_left"><a href="../index.php" target="_parent"><img src="../Public/image/font-88.png" width="100%"/></a></div>
		<div class="top_left_1">&nbsp;</div>
		<div class="top_middle"><a href="" target="">创建:</a>  &nbsp;&nbsp; <a href="">名片</a>  |  <a href="../app/say/index.php" target="_parent">话题</a>  |  <a href="">点评</a>  |  <a href="">圈子</a></div>		
		<?php
		session_start();
		if(isset($_SESSION['username']))
		{
		echo '<div class="top_middle_1" style="width:200px">&nbsp;</div>';
		echo '<div class="top_right" style="width:300px"><a href="">消息</a> &nbsp;&nbsp;<a href="left_my.php" target="left">我的动态</a> &nbsp;&nbsp;<a href="">设置</a>&nbsp;&nbsp;&nbsp;<a href="../Admin/admin.php" target="_parent">后台</a></div>';
		}
		
		else 
		{
		echo '<div class="top_middle_1">&nbsp;</div>';
		echo '<div class="top_right"><a href="../Admin/reg.php" target="../index.html">注册</a> &nbsp;&nbsp;<a href="../Admin/login.php" target="_parent">登录</a> &nbsp;&nbsp;</div>';
		}
		?>
	</div>
</body>
</html>


