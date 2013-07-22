<?php
include_once "conn.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<style>
body {
    font-size:10px;
    color: #003F7D;
}

a, a:visited, a:hover, a:active { text-decoration: none; color: inherit; }

.admininfo {
    margin-left: 290px;
    margin-top: 30px;
}
</style>
</head>
<body>
<?php
session_start();

  if(@$_POST["submit"])
  {
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $auth = $_POST['auth'];
    date_default_timezone_set('Asia/Shanghai');
    $time = date("Y-m-d H:i:s");
    $op = $_SESSION['username'];
    $sql = "INSERT INTO mingpian_users (username, password, permission, regdate, operator) VALUES ('$name','$pwd','$auth','$time','$op')";
   if(mysql_query($sql,$conn))
    {
        exit($name.'添加成功!');
    }
   else
   {
     echo mysql_error();
     exit('添加失败!');
   } 
  }
?>


    <form id="useradd" name="useradd" method="post" action="" enctype="multipart/form-data" onsubmit="return checkform()">
      <table width="100%" border="0" align="center" cellspacing="1" class="table">
        <tr bgcolor="#FFFFFF" height="25">
          <th height="25" colspan="2" align="left">&nbsp;添加用户</th>
        </tr>
        <tr bgcolor="#FFFFFF" height="25">
          <td width="355" height="25" align="right">帐号：</td>
          <td width="919" align="left">
        <label>
            <input name="name" type="text" id="name" size="20" />
          </label></td>
        </tr>

        <tr bgcolor="#FFFFFF" height="25">
          <td width="355" height="25" align="right">口令：</td>
          <td width="919" align="left">
        <label>
            <input name="pwd" type="text" id="pwd" size="20" />
          </label></td>
        </tr>

        <tr bgcolor="#FFFFFF" height="25">
          <td width="355" height="25" align="right">权限分配：</td>
          <td width="919" align="left">
        <label>
            <input name="auth" type="int" id="auth" size="5" />
          </label></td>
        </tr>

        <tr bgcolor="#FFFFFF" height="25">
          <td width="355" height="25" align="right"></td>
            <td width="919" align="left">
                <label>
                <input type="submit" name="submit" value="提交" />
                </label>
                <label>
                <input type="reset" name="reset" value="重置" />
                </label>
            </td>      
        </tr>
      </table>
    </form>
    <div class='admininfo'>
    <table width='200' height='125' bgcolor="#003F7D" cellpadding="8" cellspacing="1">
        <tr bgcolor="#FFFFFF" height="25">
            <th>账户权限说明</th>
            <th></th>
        </tr>
        <tr bgcolor="#FFFFFF" height="25">
            <td>root管理员</td>
            <td>1</td>
        </tr>
        <tr bgcolor="#FFFFFF" height="25">
            <td>普通管理员</td>
            <td>2</td>
        </tr>
        <tr bgcolor="#FFFFFF" height="25">
            <td>栏目管理员</td>
            <td>3</td>
        </tr>
        <tr bgcolor="#FFFFFF" height="25">
            <td>普通用户</td>
            <td>4</td>
        </tr>
    </table>
    </div>
</body>
</html>