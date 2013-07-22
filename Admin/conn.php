<?php
/*****************************
*数据库连接
*****************************/
$conn = mysql_connect("localhost","root","root");
if (!$conn){
	die("连接数据库失败：" . mysql_error());
}

mysql_select_db("mingpiantest", $conn);

header("Content-Type: text/html; charset=gbk");
mysql_query("SET NAMES gbk");

$timezone="Asia/Shanghai";
date_default_timezone_set($timezone);//大中华时间

mysql_close();

