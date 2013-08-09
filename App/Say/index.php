<?php
define('INCLUDE_CHECK',1);
require_once('conn.php');
require_once('function.php');

$query=mysql_query("select * from say_content order by id desc limit 0,10",$link);
while ($row=mysql_fetch_array($query)) {
  @$sayList.=formatSay($row['tag'],$row['content'],$row['addtime'],$row['userid']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>话题</title>
<link rel="stylesheet" type="text/css" href="../../public/css/top.css">
<style type="text/css">
.demo{width:600px; margin:30px auto; color:#51555c}
.demo h3{height:32px; line-height:32px; font-size:18px}
.demo h3 span{float:right; font-size:32px; font-family:Georgia,serif; color:#ccc; overflow:hidden}
.input{width:594px; height:58px; margin:5px 0 10px 0; padding:4px 2px; border:1px solid #aaa; font-size:12px; line-height:18px; overflow:hidden}
.sub_btn{float:right; width:94px; height:28px;}
.clear{clear:left;}
#saywrap{margin-top: 30px;}
.saylist{margin:8px auto; padding:4px 0; border-bottom:1px dotted #d3d3d3}
.saylist img{float:left; width:50px; margin:4px}
.saytxt{float:right; width:530px; overflow:hidden}
.saytxt p{line-height:18px}
.saytxt p strong{margin-right:6px}
.date{color:#999; font-size: 14px;}
.inact,.inact:hover{background:#f5f5f5; border:1px solid #eee; color:#aaa; cursor:auto;}
#msg{color:#f30}
#main .right{float: right; width: 320px;}
#main .right .clear{height: 150px}
#main .right .hotlist{height: auto; font-size: 14px;}

</style>
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<!-- <script type="text/javascript" src="js/function.js"></script> -->
</head>

<body>
<div class="head_nav_line">
	<div class="detailpage_top">

		<div class="top_left_3">&nbsp;</div>

		<div class="top_left"><a href="../../index.php"><img src="../../Public/image/font-88.png" width="100%"/></a></div>

		<div class="top_left_2">&nbsp;</div>
		
		<div class="top_middle"><a href="" target="">创建:</a>  &nbsp;&nbsp; <a href="../../index/index.html" target="_parent">名片</a>  |  <a href="index.php">话题</a>  |  <a href="">点评</a>  |  <a href="">圈子</a></div>

		<div class="top_middle_2">&nbsp;</div>
		
		<div class="top_right_1"><a href="../Admin/reg.html" target="../index.html">注册</a> &nbsp;&nbsp;<a href="../Admin/index.html" target="_parent">登录</a> &nbsp;&nbsp;</div>
	</div>
</div>

<div id="main">
	<div class="right">
	<div class="clear"></div>
	<div class="hotlist">
		<p>&nbsp;热门话题</p>
		</br>
		</br>
		<table border="0" cellpadding="0" cellspacing="10">
		<?php
		require_once 'conn.php';
		$sql = "SELECT tag, count(tag) as tag_count FROM `say_content` group by tag order by count(tag) desc limit 1,10";
		$sqlconn = mysql_query($sql);
		while ($data = mysql_fetch_array($sqlconn)) {
			echo '<tr><td width="170px"><a href="topic.php?tag_code='.$data['tag'].'">'.'#'.$data['tag'].'#'.'</a></td>';
			echo '<td>'.$data['tag_count'].'</td></tr>';
		}
		?>
		</table>
	</div>
  
  	</div>
  	<div class="demo">
    <form id="myform" action="say.php" method="post">
      <h3><span class="counter">140</span>说说你想聊的话题...</h3>
      <textarea name="saytxt" id="saytxt" class="input" tabindex="1" rows="2" cols="40"></textarea>
      <p>
      <input type="image" src="images/btn.gif" class="sub_btn" alt="发布" />
      <span id="msg"></span>
      </p>
    </form>
  	<div class="clear"></div>
    <div id="saywrap">
     <?php echo $sayList;?>
    </div>
  </div>
</div>

<div id="footer">
</div>
</body>
</html>
