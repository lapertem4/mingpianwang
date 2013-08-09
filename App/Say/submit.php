<?php
/**
 * 处理表单提交数据
*/
define('INCLUDE_CHECK',1);
require_once('conn.php');
require_once('function.php');

$tag_url = '';
$tag = '';
$txt = stripslashes($_POST['saytxt']);

if(strpos($txt, '#') !== false){
	preg_match_all('~#(.+?)#~', $txt, $tag); //提取关键词
	//$url = 'topic.php?tag='.$tag[1][0]; //url跳转
	$txt = preg_replace('~#(.+?)#~', '', $txt); //消除关键词
	$tag = $tag[1][0];
	//$tag_hash = $tag[0][0];
}

$txt = mysql_real_escape_string(strip_tags($txt),$link); //过滤HTML标签，并转义特殊字符
if(mb_strlen($txt)<1 || mb_strlen($txt)>140)
    die("0");
$time = time();
$userid = rand(0,7);

$query = mysql_query("insert into say_content (userid,content,addtime,tag) values ('$userid','$txt','$time','$tag')");
if(mysql_affected_rows($link) != 1)
    die("0");
echo formatSay($tag,$txt,$time,$userid);

?>
