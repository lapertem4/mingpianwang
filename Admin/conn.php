<?php
/*****************************
*���ݿ�����
*****************************/
$conn = mysql_connect("localhost","root","root");
if (!$conn){
	die("�������ݿ�ʧ�ܣ�" . mysql_error());
}

mysql_select_db("mingpiantest", $conn);

header("Content-Type: text/html; charset=gbk");
mysql_query("SET NAMES gbk");

$timezone="Asia/Shanghai";
date_default_timezone_set($timezone);//���л�ʱ��

mysql_close();

