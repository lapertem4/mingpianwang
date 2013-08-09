<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="../../public/css/top.css">
<style type="text/css">
.main_info {
	width: 1100px;
	margin-left:auto;
	margin-right:auto;
}
.main_info .left_main {
	float: left;
	width: 850px;
}
.main_info .right_info {
	float:left;
	position:relative;
	width: 250px;
	height: 650px;
	background-color:#006600;
}
.main_info .left_main #topic_title {
	color: #687f96;
	float: left;
	width: 550px;
	height: 150px;
	margin-left: 150px;
}
.main_info .left_main #topic_title #topic {

	line-height:65px;
	height: 65px;
	margin-top:10px;
	font-size:22px;
}
.main_info .left_main #topic_title #topic_intro {
	height: 65px;
	margin-top:10px;
	font-size: 14px;
}
.main_info .left_main #topic_pk {
	float:left;
	position:relative;
	width: 850px;
	height: 300px;
}
.main_info .left_main #topic_pk #pk_txt {
	float:left;
	position:relative;  
	height:200px;
	width:850px;
}
.main_info .left_main #topic_pk #pk_txt #pk_txt_positive {
	margin: 0 20px 0 80px;
	float:left;
	position:relative;
	height: 170px;
	width: 260px;
	background-color: #ee827c;
}
.main_info .left_main #topic_pk #pk_txt #vs {
	float:left;
	position:relative;
	width: 100px;
	height: 170px;
}
.main_info .left_main #topic_pk #pk_txt #vs #vs_circle {
	float:left;
	position:relative;
	margin: 65px 30px 65px 30px;
	width: 40px;
	height: 40px;
	border: 2px solid #cd5e3c;
	border-radius: 500px;
	text-align:center;
	line-height:40px;
	font-size:18px;
	color: #cd5e3c;	
	font-weight: bold;
}
.main_info .left_main #topic_pk #pk_txt #pk_txt_negative {
	margin: 0 15px 0 20px;
	float:left;
	position:relative;
	height: 170px;
	width: 260px;
	background-color:#a0d8ef;
}
.main_info .left_main #topic_pk #pk_img {
	float:left;
	position:relative;  
	height:100px;
	width:850px;
}
.main_info .left_main #post_comment {
	float: left;
	position: relative;
	height:200px;
	width:850px;
	background-color:#99CC00;
}
.main_info .say {
	float: left;
	height: 600px;
	width: 1100px;
	position: relative;
}
.main_info .say .say_position {
	float: left;
	position:relative;
	height: 30px;
	width: 366px;
	border-bottom: 1px solid #660033;
}
.main_info .say #positive {
	float: left;
	width: 365px;
	height: 600px;
	position: relative;
	border-left: 1px solid #663333;
	border-bottom: 1px solid #660033;
}
.main_info .say #neutral {
	float: left;
	width: 366px;
	height: 600px;
	position: relative;
	border-bottom: 1px solid #660033;
	border-right: 1px solid #663333;
	border-left: 1px solid #663333;
}
.main_info .say #negative {
	float: left;
	width: 365px;
	height: 600px;
	position: relative;
	border-right: 1px solid #663333;
	border-bottom: 1px solid #660033;
}

</style>
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

<div class="main_info">
	<div class="left_main">
		<div id="topic_title">
			<div id="topic"><p>#Topic#</p></div>
			<div id="topic_intro"><p>一句话简介，此话题主要讨论的内容，可长可短可多可少，后台人工编辑</p></div>
		</div>
		<div id="topic_pk">
			<div id="pk_txt">
				<div id="pk_txt_positive"></div>
				<div id="vs"><div id="vs_circle"><p style="font-color:#cd5e3c">VS</p></div></div>
				<div id="pk_txt_negative"></div>
			</div>
			<div id="pk_img"></div>
		</div>
		<div id="post_comment"></div>
	</div>
	<div class="right_info"></div>
	<div class="say">
		<div id="positive">
		<div class="say_position"><p>好唬人啊我就是正方</p></div>
		</div>
		<div id="neutral">
		<div class="say_position"><p>不关我事你们吵着先</div>
		</div>
		<div id="negative">
		<div class="say_position"><p>我是大反派别给我扣帽子啊:)</p></div>
		</div>
	</div>
</div>

<div class="footer">

</div>
</body>
</html>