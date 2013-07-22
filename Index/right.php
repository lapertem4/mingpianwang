<?php
error_reporting(0);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title></title>
<script type="text/javascript" src="../public/js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="../public/js/jquery.effect.js"></script>
<script type="text/javascript">
var temp;
$(document).ready(function(){
	$temp = $("#more");
	$(".get_more").click(function(){
		$temp.children().clone(true).appendTo($("#more"));
	})
})
</script>


<style type="text/css">

a, a:visited, a:hover, a:active { text-decoration: none; color: inherit; }

.area {
	padding-left: 30px;
	font-size: 15px;
}

.classify {
	float: left;
	padding-left: 30px;
	padding-top: 5px;
	font-size: 15px;
	width: 230px;
}

.head {
	height: 30px;
}
.headclear {
	margin: 15px;
}


.viewrange {
	float: left;
	font-size: 12px;
	padding-left: 45px;
}

.viewmode {
	float: left;
	font-size: 12px;
	padding-left: 60px;
}

.sort {
	float: left;
	font-size: 12px;
	padding-left: 60px;	
}

.refresh {
	float: right;
	padding-left: 20px;
	padding-right: 68px;
	}

.main {
}

#more {
	position: relative;
	font-size: 10px;
	width:930px; 
	height:450px;
	border:0px #0066FF solid;
}

.single_item {
	width:300px;
	height:140px; 
	border:1px #CCCCCC solid; 
	background:#F6F6F6; 
	margin:2px 2px 2px 2px; 
	padding: 0; 
	float:left; 
}

.tel, .job, .company, .name{
	height: 35px;
}

.get_more {
	text-align: center;
	float: left;
	margin-top: 10px;
	font-size:14px;
	color: #000;
	width: 940px;
	margin-bottom: 10px;
}

.foot {
	float: left;
	margin: 10px;
	padding: 3px;
	height: 30px;
	width: 910px;
	background-color: #F2F2F2;
}

.footinfo {
	float: left;
	font: 14px Arial, Helvetica, sans-serif;
	color: #000;
	margin: 5px;
}


.scroll {
	width: 18px;
	float: right;
	display: block;
	position: fixed;
	top: 40%;
	right: 0;
	border:10px;
}


.scroll_ask {
	position: relative;
	width: 18px;
	height: 60px;
	float: right;
	background-color: #D4D0C8;
	border-radius:10px 0 0 0;	
}

.scroll_top {
	position: relative;
	width: 18px;
	height: 60px;
	float: right;
	background-color: #C0C0C0;
	border-radius:0 0 0 10px;
}

.scrollpanel_ask {
	background-color: #D4D0C8;
}

.scrollpanel_top {
	background-color: #C0C0C0;
}

.scrollpanel_ask, .scrollpanel_top {
	float: right;
	display: none;
	color: #fff;
	width: 80px;
	height: 60px;
	line-height: 60px;
	text-align: center;
	cursor: pointer;
	border-radius: 5px 0 0 5px;
	box-shadow: 0 2px 2px 1px #666;
}



</style>
</head>

<body>
	<div class="area">
		<table width="60%" border="0" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td width="45"><a href="" target="">全洛阳</a></td>
					<td width="35"><a href="" target="">西工</a></td>
					<td width="35"><a href="" target="">涧西</a></td>
					<td width="35"><a href="" target="">老城</a></td>
					<td width="35"><a href="" target="">缠河</a></td>
					<td width="35"><a href="" target="">洛龙</a></td>
					<td width="35"><a href="" target="">高开</a></td>
					<td width="35"><a href="" target="">伊滨</a></td>
					<td width="35"><a href="" target="">吉利</a></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="headclear"></div>
	<div class="head">
		<div class="classify" style="font-size:14px;">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td>
                                                    <?php
                                                    require '../admin/conn.php';
                                                    $category_id = $_GET['category_id'];
                                                    $sql = "SELECT a.name AS name_l2, b.name AS name_l1 FROM categories a, ( 
                                                        SELECT name 
                                                        FROM categories 
                                                        WHERE id = ( SELECT parent_id FROM categories WHERE id = $category_id )) AS b 
                                                            WHERE a.id = $category_id";
                                                    $sqldata = mysql_query($sql, $conn);
                                                    $maindata=mysql_fetch_array($sqldata);
                                                    echo '<a href="index.html" target="_parent">全部分类</a>'.'>'.$maindata['name_l1'].'>'.$maindata['name_l2'];
                                                          
                                                    ?>
                                                </td>
					</tr>
				</tbody>	
			</table>
		</div>
		<div class="viewrange">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td width="50">显示范围</td>
						<td style="padding-left: 10px;">
							<select id="range">
								<option value="0" selected>全部可见</option>
								<option value="1" >我的偏好</option>
								<option value="2" >五星保障</option>
							</select>
						</td>
					</tr>
				</tbody>	
			</table>
		</div>
		<div class="viewmode">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td width="70">显示模式</td>
						<td width="35"><a href="" target=""><img src="../Public/image/font-390.png" style="height: 25px;"></a></td>
						<td width="35"><a href="" target=""><img src="../Public/image/font-388.png" style="height: 25px;"></a></td>
						<td width="35"><a href="" target=""><img src="../Public/image/font-317.png" style="height: 25px;"></a></td>
					</tr>
				</tbody>	
			</table>
		</div>
		<div class="sort">
			<table width="100%"  border="0" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td width="50" valign="center">排序方式</td>
						<td style="padding-left: 10px;">
						<select id="range">
							<option value="0" selected>信誉度</option>
							<option value="1" >时间</option>
							<option value="2" >评论数</option>
						</select>
						</td>
					</tr>
				</tbody>	
			</table>		
		</div>
		<div class="refresh">
			<a href="" target=""><img src="../Public/image/font-385.png" style="height: 25px;"></a>
		</div>
	</div>
	
	<div class="main">
		<div id="more" >
		<?php
		require '../Admin/conn.php';	
		require '../Index/card.php';
		?>
		</div>
		<a href="javascript:;" class="get_more">更多…</a>
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

	<div class="foot">
		<div class="footinfo" style="padding-left: 20px;"><a href="" target="">免责声明</a></div>
		<div class="footinfo" style="padding-left: 60px;"><a href="" target="">使用条款</a></div>
		<div class="footinfo" style="padding-left: 125px;">copy right 2013 - 2016 reserved</div>
		<div class="footinfo" style="padding-left: 80px;"><a href="" target="">开发人员</a></div>
		<div class="footinfo" style="padding-left: 60px;"><a href="" target="">举报不良信息</a></div>
	</div>


</body>
</html>






