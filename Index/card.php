<?php
error_reporting(0);

$conn = mysql_connect("localhost","root","root");
if (!$conn){
	die("连接数据库失败：" . mysql_error());
}

mysql_select_db("mingpiantest", $conn);

mysql_query("SET NAMES gbk");

$timezone="Asia/Shanghai";
date_default_timezone_set($timezone);//大中华时间

$category_id = $_GET['category_id'];
if(!isset($category_id)){
    $sql = "SELECT name,weibo_id,verified,company FROM weibo ORDER BY rand() limit 9";
}else{
    $sql = "SELECT name,weibo_id,verified,company FROM weibo WHERE category_id = $category_id ORDER BY weibo_id limit 9";
}

//var_dump($sql);end();
$sqldata = mysql_query($sql, $conn);
//var_dump($sqldata);end();
//$maindata = mysql_fetch_array($sqldata);
//var_dump($maindata);

while($maindata=mysql_fetch_array($sqldata)){
    echo	'<div class="single_item" onclick="parent.location.href=\'page.php?id='.$maindata['weibo_id'].'\';">';
    echo		'<div class="name">'.$maindata['name'].'</div>';
    echo 		'<div class="tel">'.$maindata['weibo_id'].'</div>';
    echo 		'<div class="job">'.$maindata['verified'].'</div>';
    echo 		'<div class="company">'.$maindata['company'].'</div>';
    echo	'</div>';

}

?>
