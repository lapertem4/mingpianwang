<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>Top ��</title>
<link rel="stylesheet" type="text/css" href="../public/css/index.css">
</head>

<body>
	<div class="top">
		<div class="top_left_3">&nbsp;</div>
		<div class="top_left"><a href="../index.php" target="_parent"><img src="../Public/image/font-88.png" width="100%"/></a></div>
		<div class="top_left_1">&nbsp;</div>
		<div class="top_middle"><a href="" target="">����:</a>  &nbsp;&nbsp; <a href="">��Ƭ</a>  |  <a href="../app/say/index.php" target="_parent">����</a>  |  <a href="">����</a>  |  <a href="">Ȧ��</a></div>		
		<?php
		session_start();
		if(isset($_SESSION['username']))
		{
		echo '<div class="top_middle_1" style="width:200px">&nbsp;</div>';
		echo '<div class="top_right" style="width:300px"><a href="">��Ϣ</a> &nbsp;&nbsp;<a href="left_my.php" target="left">�ҵĶ�̬</a> &nbsp;&nbsp;<a href="">����</a>&nbsp;&nbsp;&nbsp;<a href="../Admin/admin.php" target="_parent">��̨</a></div>';
		}
		
		else 
		{
		echo '<div class="top_middle_1">&nbsp;</div>';
		echo '<div class="top_right"><a href="../Admin/reg.php" target="../index.html">ע��</a> &nbsp;&nbsp;<a href="../Admin/login.php" target="_parent">��¼</a> &nbsp;&nbsp;</div>';
		}
		?>
	</div>
</body>
</html>


