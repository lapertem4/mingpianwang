<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>�û���¼</title>
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
    alert("�������û���!");
    LoginForm.username.focus();
    return (false);
  }
  if (LoginForm.password.value == "")
  {
    alert("����������!");
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
<legend>�û���¼</legend>
<form name="LoginForm" method="post" action="login.php" onSubmit="return InputCheck(this)">
<p>
<label for="username" class="label"><span class="STYLE9">�û���</span>:</label>
<input id="username" name="username" type="text" class="input" />
<p/>
<p>
<label for="password" class="label"><span class="STYLE9">�� ��</span>:</label>
<input id="password" name="password" type="password" class="input" />
<p/>
<p>
<input type="submit" name="submit" value="  ȷ ��  " class="left" />
</p>
</form>
</fieldset>
</div>
<?php
session_start();

//ע����¼
if(@$_GET['action'] == "logout"){
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	echo 'ע����¼�ɹ�������˴� <a href="login.php">��¼</a>';
	echo '<br />';
	echo '************! ����˴� <a href="../index/index.html">����ҳ</a>';
	exit;
}

//��¼
if(!isset($_POST['submit'])){
	exit;
}

else {
$username = htmlspecialchars($_POST['username']);
$password = ($_POST['password']);

//�������ݿ������ļ�
include("conn.php");
//����û����������Ƿ���ȷ
$sql="select user_id from mingpian_users where username='$username' and password='$password' limit 1";
$result = mysql_query($sql,$conn);
if(mysql_fetch_array($result)){
	//��¼�ɹ�
	$_SESSION['username'] = $username;
	$_SESSION['userid'] = $result['user_id'];
	echo $username.' ��ӭ�㣡���� <a href="admin.php">�û�����</a><br />';
	echo '����˴� <a href="login.php?action=logout">ע��</a> ��¼��<br />';
	exit;
} else {
	exit('��¼ʧ�ܣ�����˴� <a href="javascript:history.back(-1);">����</a> ����');
}
}

?>

    
</body>
</html>

