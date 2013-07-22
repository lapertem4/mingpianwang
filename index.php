<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=GB2312">
        <title>名片墙</title>
		<link rel="stylesheet" type="text/css" href="Public/css/css.css" />  
    </head>
    <body>
     
	 <div class="wallwrapper">
	 	<div class="header">
			<div class="logo"><img src="Public/image/1.bmp" width="75%"/></div>
			<div class="logo_clear"></div>
			<div class="menu">
				<ul>
					<li><a href="Index/index.html">首页</a></li>
					<li>名片</li>
					<li>生活</li>
					<li>圈子</li>
					<li>论坛</li>
					<li>帮助</li>					
				</ul>
			</div>
			<div class="menu_clear"></div>
			<div class="right_head">
				<ul>
					<li>已经有帐号了?<a href="Admin/login.php">登录</a></li>
					<li>或者&nbsp;<a href="Admin/reg.php">免费注册一个</a></li>
				</ul>	
			</div>
		</div>
		
		<div class="content">
			<div class="title">
				<div class="title_word"><p>让每个需要你的人都能找到你!</p></div>
				<div id="title_signup">
					<div class="title_signup_word"><a href="Admin/reg.php">来吧，加入我们</a></div>
				</div>
			</div>
			<div class="wall">
				<div class="wall_content">
				<?php 
				require 'Index/wall.php';
				?>
				</div>
			</div>
		</div>
		
		<div class="footer">
			<div class="footinfo" style="padding-left: 20px;"><a href="" target="">免责声明</a></div>
			<div class="footinfo" style="padding-left: 60px;"><a href="" target="">使用条款</a></div>
			<div class="footinfo" style="padding-left: 125px;">copy right 2013 - 2016 reserved</div>
			<div class="footinfo" style="padding-left: 100px;"><a href="" target="">开发人员</a></div>
			<div class="footinfo" style="padding-left: 60px;"><a href="" target="">举报不良信息</a></div>
	 	</div>
		
	 </div>


    </body>
</html>
