<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>用户登录</title>
  <style type="text/css">
    html{font-size:12px;}
  fieldset{width:300px; margin: 0 auto;}
  legend{font-weight:bold; font-size:14px;}
  .label{float:left; width:70px; margin-left:10px;}
  .left{margin-left:80px;}
  .input{width:150px;}
  span{color: #666666;}
  .STYLE9 {font-size: 14px; color: #000000; }
  </style>
<script language=JavaScript>
<!--

function InputCheck(LoginForm)
{
  if (LoginForm.username.value == "")
  {
    alert("请输入用户名!");
    LoginForm.username.focus();
    return (false);
  }
  if (LoginForm.password.value == "")
  {
    alert("请输入密码!");
    LoginForm.password.focus();
    return (false);
  }
}

//-->
</script>
</head>
<body>
<div>
<fieldset>
<legend>用户登录</legend>
<form name="LoginForm" method="post" action="login.php" onSubmit="return InputCheck(this)">
<p>
<label for="username" class="label"><span class="STYLE9">用户名</span>:</label>
<input id="username" name="username" type="text" class="input" />
<p/>
<p>
<label for="password" class="label"><span class="STYLE9">密 码</span>:</label>
<input id="password" name="password" type="password" class="input" />
<p/>
<p>
<input type="submit" name="submit" value="  确 定  " class="left" />
</p>
</form>
</fieldset>
</div>
<?php
session_start();

//注销登录
if(@$_GET['action'] == "logout"){
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	echo '注销登录成功！点击此处 <a href="login.php">登录</a>';
	echo '<br />';
	echo '************! 点击此处 <a href="../index/index.html">回首页</a>';
	exit;
}

//登录
if(!isset($_POST['submit'])){
	exit;
}

else {
$username = htmlspecialchars($_POST['username']);
$password = ($_POST['password']);

//包含数据库连接文件
include("conn.php");
//检测用户名及密码是否正确
$sql="select user_id from mingpian_users where username='$username' and password='$password' limit 1";
$result = mysql_query($sql,$conn);
if(mysql_fetch_array($result)){
	//登录成功
	$_SESSION['username'] = $username;
	$_SESSION['userid'] = $result['user_id'];
	echo $username.' 欢迎你！进入 <a href="admin.php">用户中心</a><br />';
	echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
	exit;
} else {
	exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
}

?>

    
</body>
</html>

