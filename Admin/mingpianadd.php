
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {font-size:10px;color: #003F7D;}
a, a:visited, a:hover, a:active { text-decoration: none; color: inherit; }
.upload{width:620px; margin: auto; margin-top: 30px;}
.upload p{line-height:32px}
.upload #showimg img {width: 200px;}
.btn{position: relative;overflow: hidden;margin-right: 4px;display:inline-block;*display:inline;padding:4px 10px 4px;line-height:18px;*line-height:20px;color:#fff;text-align:center;vertical-align:middle;cursor:pointer;background-color:#5bb75b;border:1px solid #cccccc;border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-bottom-color:#b3b3b3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
.btn input {position: absolute;top: 0; right: 0;margin: 0;border: solid transparent;opacity: 0;filter:alpha(opacity=0); cursor: pointer;}
.progress { position:relative; margin-left:100px; margin-top:-24px; width:200px;padding: 1px; border-radius:3px; display:none}
.bar {background-color: green; display:block; width:0%; height:20px; border-radius: 3px; }
.percent { position:absolute; height:20px; display:inline-block; top:3px; left:2%; color:#fff }
.files{height:22px; line-height:22px; margin:10px 0}
.delimg{margin-left:20px; color:#090; cursor:pointer}

</style>
<!--
<script language="javascript">
  //DOM树
  function checkform()
  {
    if(document.forms["cardadd"].elements["cardname"].value=="")
    {
      alert("抱歉请留下您的大名");
      document.forms["cardadd"].elements["cardname"].focus();
      return false;
    }
    if(document.forms["cardadd"].elements["job"].value=="")
    {
      alert("请填写您提供的职业");
      document.forms["cardadd"].elements["job"].focus();
      return false;
    }
    if(document.forms["cardadd"].elements["company"].value=="")
    {
      alert("您的公司呢:\)");
      document.forms["cardadd"].elements["company"].focus();
      return false;
    }
    if(document.forms["cardadd"].elements["tel"].value=="")
    {
      alert("总得有联系方式能找到您吧");
      document.forms["cardadd"].elements["tel"].focus();
      return false;
    }
    return true;
  }
</script>
-->
<script type="text/javascript" src="../public/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="../public/js/jquery.form.js"></script>
<script type="text/javascript">
$(function () {
  var bar = $('.bar');
  var percent = $('.percent');
  var showimg = $('#showimg');
  var progress = $(".progress");
  var files = $(".files");
  var btn = $(".btn span");
  $("#fileupload").wrap("<form id='myupload' action='uploadpic.php' method='post' enctype='multipart/form-data'></form>");
    $("#fileupload").change(function(){
    $("#myupload").ajaxSubmit({
      dataType:  'json',
      beforeSend: function() {
            showimg.empty();
                        progress.show();
            var percentVal = '0%';
            bar.width(percentVal);
            percent.html(percentVal);
                        btn.html("上传中...");
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal);
            percent.html(percentVal);
        },
      success: function(data) {
        files.html(data.name+"("+data.size+"k) <span class='delimg' rel='"+data.pic+"'>删除</span>");
        var img = "../upload/"+data.pic;
        showimg.html("<img src="+img+" >");
        btn.html("上传头像");
      },
      error:function(xhr){
        btn.html("上传失败");
        bar.width('0')
        files.html(xhr.responseText);
      }
    });
  });
  
  $(".delimg").live('click',function(){
    var pic = $(this).attr("rel");
    $.post("uploadpic.php?act=delimg",{imagename:pic},function(msg){
      if(msg==1){
        files.html("删除成功.");
        showimg.empty();
        progress.hide();
      }else{
        alert(msg);
      }
    });
  });
});
</script>

</head>
<body>
<?php
include_once "conn.php";
  if(@$_POST["submit"])
  {
    $cardname=$_POST["cardname"];
    $keyword=$_POST["keyword"];
    $job=$_POST["job"];
    $company=$_POST["company"];
    $age=$_POST["age"];
    $comment=$_POST["comment"];
    $tel=$_POST["tel"];
    date_default_timezone_set('Asia/Shanghai');
    $adddate =  date("Y-m-d H:i:s");
    $picfile = new DomDocument;
    $picfile -> getElementById('#showimg img');
    $sql="  INSERT INTO mingpian_card (name, keyword, job, company, tel, age, addtime, comments, picfile)
            VALUES ('$cardname','$keyword','$job','$company','$tel','$age','$adddate','$comment','$picfile')";
   if(mysql_query($sql,$conn))
    {
        exit('添加成功!');
    }
   else
   {
     echo mysql_error();
     exit('添加失败!');
   } 
  }
?>
    


<form enctype="multipart/form-data" id="cardadd" name="cardadd" method="post" action="" onsubmit="return checkform()">
        <div id="main">
            <div class="upload">
                 <p>说明：示例中只允许上传gif/jpg格式的图片，图片大小不能超过500k。</p>
                 <div class="btn">
                 <span>上传头像</span>
                 <input id="fileupload" type="file" name="mypic">
                 </div>
                 <div class="progress">
                 <span class="bar"></span><span class="percent">0%</span >
                 </div>
                 <div class="files"></div>
                 <div id="showimg"></div>
            </div>
         </div>


  <table width="100%" border="0" align="center" cellspacing="1" >
    <tr>
      <td width="355" height="25" align="right">鼎鼎大名：</td>
      <td width="919" align="left"><input name="cardname" type="text" id="cardname" size="15" /></td>
    </tr>
    <tr bordercolor="#000000" bgcolor="#cccccc">
      <td align="right" bgcolor="#FFFFFF" >关键词：</td>
      <td bgcolor="#FFFFFF" ><input name="keyword" type="text" id="keywords" size="50" />(选填)</td>
    </tr>
    <tr bordercolor="#000000" bgcolor="#cccccc">
      <td align="right" bgcolor="#FFFFFF" >您的头衔：</td>
      <td bgcolor="#FFFFFF" ><input name="job" type="text" id="job" size="50" />
       </td>
    </tr>
    <tr bordercolor="#000000" bgcolor="#cccccc">
      <td align="right" bgcolor="#FFFFFF" >您所在公司：</td>
      <td bgcolor="#FFFFFF" ><input name="company" type="text" id="company" size="50" />
       </td>
    </tr>
    <tr>
      <td width="355" height="25" align="right">联系方式：</td>
      <td width="919" align="left"><input name="tel" type="text" id="tel" size="20" /></td>
    </tr>
    <tr bordercolor="#000000" bgcolor="#cccccc">
      <td align="right" bgcolor="#FFFFFF" >您的年龄：</td>
      <td bgcolor="#FFFFFF" ><input name="age" type="text" id="age" size="5" />(选填但是会增加您的得分)</td>
    </tr>
    <tr>
      <td align="right" >简要介绍：</td>
      <td align="left" ><textarea name="comment" id="comment" rows="10" cols="45" sytle="resize:none;"></textarea>
   </td>
    </tr>
    <tr>
      <td colspan="2" align="center" ></td>
    </tr>
    <tr>
      <td colspan="2" align="center" >
        <input type="submit" name="submit" value="注册" />
      </td>
    </tr>
  </table>
</form>

</body>
</html>

  
    
  


