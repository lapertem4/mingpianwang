<?php
include 'Admin/conn.php';
$query = "select * from weibo order by weibo_id limit 220";
$sql = mysql_query($query, $conn);
while($weibodata = mysql_fetch_array($sql)){
    echo '<div class="single_pic" >';
    //echo	'<img src="'.$weibodata[23].'" width="60%"/>';
	echo '<a href="index/page.php?id='.$weibodata[0].'"><img src='.$weibodata[7].'></a>';
    echo '</div>';
}

?>

