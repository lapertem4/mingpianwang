<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>名片详情页</title>
<link rel="stylesheet" type="text/css" href="../public/css/index.css">
<style type="text/css">

</style>

<script type="text/javascript" src="../Public/js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="../Public/js/jquery.effect.js"></script>

</head>

<body>
<div class="head_nav_line">
	<div class="detailpage_top">

		<div class="top_left_3">&nbsp;</div>

		<div class="top_left"><a href="../index.php"><img src="../Public/image/font-88.png" width="100%"/></a></div>

		<div class="top_left_2">&nbsp;</div>
		
<<<<<<< HEAD
		<div class="top_middle"><a href="" target="">创建:</a>  &nbsp;&nbsp; <a href="index.html" target="_parent">名片</a>  |  <a href="../app/say/index.php">话题</a>  |  <a href="">点评</a>  |  <a href="">圈子</a></div>
=======
		<div class="top_middle"><a href="" target="">创建:</a>  &nbsp;&nbsp; <a href="">名片</a>  |  <a href="">话题</a>  |  <a href="">点评</a>  |  <a href="">圈子</a></div>
>>>>>>> f8dee2fd2b00c7dca6ad46e081f922f5c69730e4

		<div class="top_middle_2">&nbsp;</div>
		
		<div class="top_right_1"><a href="../Admin/reg.html" target="../index.html">注册</a> &nbsp;&nbsp;<a href="../Admin/index.html" target="_parent">登录</a> &nbsp;&nbsp;</div>
	</div>
</div>
<?php
include '../admin/conn.php';
$pageid = $_GET['id'];
if(!isset($pageid)){
    header("location:index.html");
}

$sql = "select * from weibo where weibo_id = $pageid";
$data = mysql_fetch_array(mysql_query($sql,$conn));
$file = '../'.trim($data['file']);
?>
<div id="container" >
	<div class="content">
		<div class="content_left">
			<div class="id_info">
				<div class="id_info_1">
					<div id="id_pic">
                                            <?php echo '<img src="'.$file.'" width="70px"/>'?>
                  </div>
					<div id="id_auth"></div>
				</div>
				<div class="id_info_2">
					<table cellpadding="0" border="0" cellspacing="0">
						<tr height="35px">
							<td>
                                                            姓名:<?php echo $data['name'];?>
                          </td>
						</tr>
						<tr height="35px">
							<td>
                                                            电话:<?php echo $pageid; ?>
                          </td>
						</tr>
						<tr height="35px">
							<td>
                                                            身份:<?php echo $data['verified'];?>
                          </td>
						</tr>
						<tr height="35px">
							<td>
                                                            公司:<?php echo $data['company'];?>
                          </td>
						</tr>
					</table>
					
				</div>
			</div>
			<div class="id_tag_cloud">



			</div>
			<div class="intro">	
				<p>
					<?php echo $data['info'];?>
				</p>
			</div>
		</div>
	 	<div class="content_middle">
   		 	<div class="service_price">
				<div class="service_price_title">&nbsp;&nbsp;服务价目表</div>
				<div class="service_price_content"></div>
			</div>
			<div class="dynamic_news">
				<div class="service_price_title">&nbsp;&nbsp;服务动态</div>
				<div class="dynamic_news_content"></div>
			</div>
		</div>
		
		<div class="content_right">
			<div id="comment_type">
				<ul>
					<li style="border-right: 1px solid #5b7e91; "><a href="javascript:;" onmouseover="show(0)" class="over">全部</a></li>
					<li style="border-right: 1px solid #5b7e91;"><a href="javascript:;" onmouseover="show(1)" >好评</a></li>
					<li style="border-right: 1px solid #5b7e91;"><a href="javascript:;" onmouseover="show(2)" >中评</a></li>
					<li><a href="javascript:;" onmouseover="show(3)" >差评</a></li>
				</ul>
			</div>
			<div id="comment_content">
				<div style="display:block">11</div>
				<div style="display:none">22</div>
				<div style="display:none">33</div>
				<div style="display:none">44</div>
			</div>
		</div>
	</div>

	<div class="foot">
		<div class="footinfo" style="padding-left: 20px;"><a href="" target="">免责声明</a></div>
		<div class="footinfo" style="padding-left: 60px;"><a href="" target="">使用条款</a></div>
		<div class="footinfo" style="padding-left: 125px;">copy right 2013 - 2016 reserved</div>
		<div class="footinfo" style="padding-left: 80px;"><a href="" target="">开发人员</a></div>
		<div class="footinfo" style="padding-left: 60px;"><a href="" target="">举报不良信息</a></div>
	</div>

	<div class="scroll">
		<div class="scroll_ask">
			<div sytle="right:0px; opacity:0; display:block;">
				<a class="scrollpanel_ask">在线帮助</a>
			</div>
		</div>
		<div class="scroll_top">
			<div sytle="right:0px; opacity:0; display:block;">
				<a class="scrollpanel_top">返回置顶</a>
			</div>
		</div>
	</div> 
</div>





</body>
</html>
