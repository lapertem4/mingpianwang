<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>�û�ע��</title>
  <style type="text/css">
    html{font-size:12px;}
  fieldset{width:520px; margin: 0 auto;}
  legend{font-weight:bold; font-size:14px;}
  label{float:left; width:70px; margin-left:10px;}
  .left{margin-left:80px;}
  .input{width:150px;}
  span{color: #666666;}
  </style>
<script language=JavaScript>

function InputCheck(RegForm)
{
  if (RegForm.username.value == "")
  {
    alert("�û�������Ϊ��!");
    RegForm.username.focus();
    return (false);
  }
  if (RegForm.password.value == "")
  {
    alert("�����趨��½����!");
    RegForm.password.focus();
    return (false);
  }
  if (RegForm.repass.value != RegForm.password.value)
  {
    alert("�������벻һ��!");
    RegForm.repass.focus();
    return (false);
  }
  
}

//-->
</script>
</head>

<body>
<div>
<fieldset>
<legend>�û�ע��</legend>
<form name="RegForm" method="post" action="reg.php" onSubmit="return InputCheck(this)">
<p>
<label for="username" class="label">�û���:</label>
<input id="username" name="username" type="text" class="input" />
<span>(���3-15�ַ����ȣ�֧�ֺ��֡���ĸ�����ּ�_)</span>
<p/>
<p>
<label for="password" class="label">�� ��:</label>
<input id="password" name="password" type="password" class="input" />
<span>(�����������6λ)</span>
<p/>
<p>
<label for="repass" class="label">�ظ�����:</label>
<input id="repass" name="repass" type="password" class="input" />
<p/>
<p>
<input type="submit" name="submit" value="  �ύע��  " class="left" />
</p>
</form>
</fieldset>
</div>

<?php
if(!isset($_POST['submit'])){
	exit('�Ƿ�����!');
}
$username = $_POST['username'];
$password = $_POST['password'];
//ע����Ϣ�ж�
if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
	exit('�����û��������Ϲ涨��<a href="javascript:history.back(-1);">����</a>');
}
if(strlen($password) < 6){
	exit('�������볤�Ȳ����Ϲ涨��<a href="javascript:history.back(-1);">����</a>');
}
//�������ݿ������ļ�
include('conn.php');
//����û����Ƿ��Ѿ�����
$check_query = mysql_query("select user_id from mingpian_users where username='$username' limit 1");
if(mysql_fetch_array($check_query)){
	echo '�����û��� ',$username,' �Ѵ��ڡ�<a href="javascript:history.back(-1);">����</a>';
	exit;
}
//д������
date_default_timezone_set('Asia/Shanghai');
$reg_date = getdate();
$regdate = ("$reg_date[year]-$reg_date[mon]-$reg_date[mday] $reg_date[hours]:$reg_date[minutes]:$reg_date[seconds]");
//print $regdate;
$sql = "INSERT INTO mingpian_users(username,password,regdate)VALUES('$username','$password','$regdate')";
if(mysql_query($sql,$conn)){
	exit('�û�ע��ɹ�������˴� <a href="admin.html">��¼</a>');
} else {
	echo '��Ǹ���������ʧ�ܣ�'.mysql_error().'<br />';
	echo '����˴� <a href="javascript:history.back(-1);">����</a> ����';
}
?>


</body>
</html>



