<?php
/**
 * 处理表单提交数据
*/
define('INCLUDE_CHECK',1);
require_once('conn.php');
require_once('function.php');

$txt = stripslashes($_POST['saytxt']);
preg_match_all('~#(.+?)#~', $txt, $tag); //提取关键词
$txt = preg_replace('~#(.+?)#~', '', $txt); //替换关键词为链接
$txt = mysql_real_escape_string(strip_tags($txt),$link); //过滤HTML标签，并转义特殊字符
if(mb_strlen($txt)<1 || mb_strlen($txt)>140)
    die("0");
$time=time();
$userid=rand(0,7);
$query=mysql_query("insert into say(userid,content,addtime,tag)values('$userid','$txt','$time','$tag[1]')");
if(mysql_affected_rows($link)!=1)
    die("0");
echo formatSay($txt,$time,$userid);

?>
