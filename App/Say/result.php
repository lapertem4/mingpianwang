<?php

/*
 * 滚屏数据PHP接收端
 */

function tranTime($time) {
	$rtime = date("m-d H:i",$time);
	$htime = date("H:i",$time);
	$time = time() - $time;

	if ($time < 60) {
		$str = '刚刚';
	}
	elseif ($time < 60 * 60) {
		$min = floor($time/60);
		$str = $min.'分钟前';
	}
	elseif ($time < 60 * 60 * 24) {
		$h = floor($time/(60*60));
		$str = $h.'小时前 '.$htime;
	}
	elseif ($time < 60 * 60 * 24 * 3) {
		$d = floor($time/(60*60*24));
		if($d=1)
		   $str = '昨天 '.$rtime;
		else
		   $str = '前天 '.$rtime;
	}
    else {
		$str = $rtime;
	}
	return $str;
}

require_once('conn.php'); //连接数据库 
//$user = array('demo1','demo2','demo3','demo3','demo4'); 
$page = intval($_GET['page']);  //获取请求的页数 
$start = $page*10;
$query=mysql_query("select * from say_content order by id desc limit $start,10"); 
while ($row=mysql_fetch_array($query)) { 
    $arr[] = array( 
        'uid'=>$row['userid'],
        'content'=>$row['content'], 
        'date'=>trantime(($row['addtime'])),
        'tag'=>'#'.$row['tag'].'#'
    ); 
} 
echo json_encode($arr);  //转换为json数据输出 
?>
