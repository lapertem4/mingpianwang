<?php
include_once "conn.php";
  if($_POST["submit"])
  {
    $cardname=$_POST["cardname"];
    $keyword=$_POST["keyword"];
    $job=$_POST["job"];
    $company=$_POST["company"];
    $age=$_POST["age"];
    $comment=$_POST["comment"];
    $tel=$_POST["tel"];
    date_default_timezone_set('Asia/Shanghai');
    $adddate=date("Y-m-d H:i:s");
    //$mypic=$_POST["mypic"];
    $sql="  INSERT INTO mingpian_card (name, keyword, job, company, tel, age, addtime, comments)
            VALUES ('$cardname','$keyword','$job','$company','$tel','$age','$adddate','$comment')";
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
      <td align="left" ><textarea name="comment" id="comment" rows="10" cols="45" resize:none></textarea>
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