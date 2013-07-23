<?php

/*
 * 滚屏数据PHP接收端
 */

require_once('conn.php'); //连接数据库 
 
$user = array('demo1','demo2','demo3','demo3','demo4'); 
$page = intval($_GET['page']);  //获取请求的页数 
$start = $page*10; 
$query=mysql_query("select * from say order by id desc limit $start,10"); 
var_dump($query);exit();
while ($row=mysql_fetch_array($query)) { 
    $arr[] = array( 
        'uid'=>$row['userid'],
        'content'=>$row['content'], 
        'date'=>date('m-d H:i',$row['addtime']) 
    ); 
} 
echo json_encode($arr);  //转换为json数据输出 
?>
