<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>123</title>
	<style type="text/css">

	.demo{width:600px; height:1000px; margin:30px auto; color:#51555c}
.demo h3{height:32px; line-height:32px; font-size:18px}
.demo h3 span{float:right; font-size:32px; font-family:Georgia,serif; color:#ccc; overflow:hidden}
.input{width:594px; height:58px; margin:5px 0 10px 0; padding:4px 2px; border:1px solid #aaa; font-size:12px; line-height:18px; overflow:hidden}
.sub_btn{float:right; width:94px; height:28px;}
.clear{clear:left;}
.saylist{margin:8px auto; padding:4px 0; border-bottom:1px dotted #d3d3d3}
.saylist img{float:left; width:50px; margin:4px}
.saytxt{float:right; width:530px; overflow:hidden}
.saytxt p{line-height:18px}
.saytxt p strong{margin-right:6px}
.hotlist {
	margin: 30px auto;
	float: right;
	width: 260px;
}
.hotlist table {height: 300px;}

	</style>
</head>
<body>
<div class="main">

	<div class="hotlist">
  	<table></table>
  	</div>

<div class="demo"><p>demo</p>
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
		<p>saywrap</p>
    </div>



</div>
</div>
</body>
</html>