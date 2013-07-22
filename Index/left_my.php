<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>左侧导航</title>
<script src="../Public/js/prototype.lite.js" type="text/javascript"></script>
<script src="../Public/js/moo.fx.js" type="text/javascript"></script>
<script src="../Public/js/moo.fx.pack.js" type="text/javascript"></script>

<style type="text/css">

* { outline: none !important; }
a, a:visited, a:hover, a:active { text-decoration: none; color: inherit; }

div.search-bar
{
	margin-top: 15px;
	display: table;
	border-radius: 5px 5px 5px 5px;
	-moz-border-radius: 5px 5px 5px 5px;
	-webkit-border-radius: 5px 5px 5px 5px;
	background: rgba(227,227,227,1);
	background: -moz-linear-gradient(top, rgba(227,227,227,1) 0%, rgba(207,207,207,1) 100%);
	background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(227,227,227,1)), color-stop(100%, rgba(207,207,207,1)));
	background: -webkit-linear-gradient(top, rgba(227,227,227,1) 0%, rgba(207,207,207,1) 100%);
	background: -o-linear-gradient(top, rgba(227,227,227,1) 0%, rgba(207,207,207,1) 100%);
	background: -ms-linear-gradient(top, rgba(227,227,227,1) 0%, rgba(207,207,207,1) 100%);
	background: linear-gradient(to bottom, rgba(227,227,227,1) 0%, rgba(207,207,207,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e3e3e3', endColorstr='#cfcfcf', GradientType=0 );
	-webkit-box-shadow: inset 0px 1px 0px 0px rgba(255,255,255,1);
	-moz-box-shadow: inset 0px 1px 0px 0px rgba(255,255,255,1);
	box-shadow: inset 0px 1px 0px 0px rgba(255,255,255,1);
}

div.search-bar > .input > input
{
	width: 100px;
	margin: 0;
	border: 1px solid #959595;
	border-radius: 5px 0px 0px 5px;
	-moz-border-radius: 5px 0px 0px 5px;
	-webkit-border-radius: 5px 0px 0px 5px;
	padding: 8px;
	padding-left: 45px;
	-webkit-box-shadow: 0px 1px 0px 0px rgba(255,255,255,.4), inset 0px 6px 5px -6px rgba(0,0,0,0.5);
	-moz-box-shadow: 0px 1px 0px 0px rgba(255,255,255,.4), inset 0px 6px 5px -6px rgba(0,0,0,0.5);
	box-shadow: 0px 1px 0px 0px rgba(255,255,255,.4), inset 0px 6px 5px -6px rgba(0,0,0,0.5);
	color: #a8a8a8;
	background: #fff url(../Public/image/icon.png) no-repeat 10px;
	border-right: 0px;
}

div.search-bar > .button > input[type=submit]
{
	margin: 0;
	border: 1px solid #6ca2ba;
	border-radius: 0px 5px 5px 0px;
	-moz-border-radius: 0px 5px 5px 0px;
	-webkit-border-radius: 0px 5px 5px 0px;
	padding: 8px;
	background: rgba(173,210,226,1);
	background: -moz-linear-gradient(top, rgba(173,210,226,1) 0%, rgba(149,187,208,1) 100%);
	background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(173,210,226,1)), color-stop(100%, rgba(149,187,208,1)));
	background: -webkit-linear-gradient(top, rgba(173,210,226,1) 0%, rgba(149,187,208,1) 100%);
	background: -o-linear-gradient(top, rgba(173,210,226,1) 0%, rgba(149,187,208,1) 100%);
	background: -ms-linear-gradient(top, rgba(173,210,226,1) 0%, rgba(149,187,208,1) 100%);
	background: linear-gradient(to bottom, rgba(173,210,226,1) 0%, rgba(149,187,208,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#add2e2', endColorstr='#95bbd0', GradientType=0 );
	-webkit-box-shadow: inset 0px 1px 0px 0px rgba(255,255,255,.4);
	-moz-box-shadow: inset 0px 1px 0px 0px rgba(255,255,255,.4);
	box-shadow: inset 0px 1px 0px 0px rgba(255,255,255,.4);
	color: #2f627d;
	font-weight: bold;
	cursor: pointer;
}

div.search-bar > .button > input[type=submit]:hover
{
	background: #96bbcd;
}

div.search-bar > .button > input[type=submit]:active
{
	background: #96bbcd;
	-webkit-box-shadow: inset 0px 6px 5px -6px rgba(0,0,0,0.5);
	-moz-box-shadow: inset 0px 6px 5px -6px rgba(0,0,0,0.5);
	box-shadow: inset 0px 6px 5px -6px rgba(0,0,0,0.5);
}


ul#search-bar-freebie { display: table; list-style: none; margin: 0; padding: 0; }
ul#search-bar-freebie > li { float: left; margin-right: 10px; margin-bottom: 10px; padding: 10px 10px; }
ul#search-bar-freebie > li:last-child { margin-right: 0; }
ul#search-bar-freebie > li > span { margin-bottom: 10px; }

body {
	font:12px Arial, Helvetica, sans-serif;
	color: #000;
}

.menu_detail {
	width: 500px;
}
H1 {
	font-size: 13px;
	margin: 0px;
	width: 500px;
	cursor: pointer;
	height: 22px;
	line-height: 20px;	
	padding-left: 10px;
}
H1 a {
	display: block;
	padding-top: 1px;
	padding-right: 8px;
	padding-bottom: 0px;
	padding-left: 8px;	
	width: 500px;
	color: #000;
	height: 22px;
	text-decoration: none;	
	moz-outline-style: none;
	background-repeat: repeat-x;
}
.content {
	padding-left: 25px; margin: 5px; line-height: 25px;
}

.menu_info {
	padding-top: 10px;
	padding-left: 0px;
	
}
.menu_info_clear {
	display: block;
	height: 130px;
	margin: 10px;
}



</style>
</head>

<body>
	<div class="menu">
		<div class="search">
		<ul id="search-bar-freebie">
			<li>
				<div class="search-bar">
					<span class="input"><input type="text" name="search" id="search" placeholder="Search..."/></span>
					<span class="button"><input type="submit" name="go-search" id="go-search" value="Find" /></span>
				</div>
			</li>
		</ul>
		</div>
		<div class="menu_detail_total" style="height: 200px;">
			<div class="menu_detail">
				<H1 class="title"><A href="javascript:void(0)">+ 名片</a></H1>
				<div class="content">
					<a href="" target="">全部可见</a><br />
					<a href="" target="">圈子分享</a><br />
					<a href="" target="">我的名片</a>
				</div>
				<H1 class="title"><A href="javascript:void(0)">+ 点评</a></H1>
				<div class="content">
					<a href="" target="">我的主题</a><br />
					<a href="" target="">我参与的</a><br />
					<a href="" target="">回复我的</a>
				</div>
				<H1 class="title"><A href="javascript:void(0)">+ 我的圈子</a></H1>
				<div class="content">
				  	<a href="" target="">装修圈</a><br />
					<a href="" target="">骑行俱乐部</a>
				</div>
				<H1 class="title"><a href="javascript:void(0)">+ 我的好友</a></H1>
				<div class="content">
					<a href="" target="">一个朋友叫S</a><br />
					<a href="" target="">一个伙计叫B</a>
				</div>
			</div>
		</div>
		<div class="menu_info_clear"></div>
		<div class="menu_info">
			<table width="100%" border="0" cellpadding="0" cellspacing="10">
				<tbody>
					<tr height="10">
						<td width="20"><img src="../Public/image/font-72.png" style="height: 25px;"></td>
						<td><a href="" target="">推荐有礼</a></td>
					</tr>
					<tr>
						<td width="20"><img src="../Public/image/font-307.png" style="height: 25px;"></td>
						<td><a href="" target="">便民服务箱</a></td>
					</tr>
					<tr>
						<td width="20"><img src="../Public/image/font-261.png" style="height: 25px;"></td>
						<td><a href="" target="">关于我们</a></td>
					</tr>
					<tr>
						<td width="20"><img src="../Public/image/font-349.png" style="height: 25px;"></td>
						<td><a href="" target="">400-400-4004</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
<script type="text/javascript">
		var contents = document.getElementsByClassName('content');
		var toggles = document.getElementsByClassName('title');
	
		var myAccordion = new fx.Accordion(
			toggles, contents, {opacity: true, duration: 400}
		);
		myAccordion.showThisHideOpen(contents[0]);
</script>

</body>
</html>


