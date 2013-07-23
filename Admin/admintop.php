<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>标题</title>
<style type="text/css">

a, a:visited, a:hover, a:active { text-decoration: none; color: inherit; }

body { color: #687f96; font-size: 14px; background-color: #EFEFEF;}

.tophead {
    width: auto;
    height: auto;
}
.tophead .logo {
    float: left;
    padding-left: 40px;
}
.tophead .logininfo {
    float: right;
    padding-right: 40px;
    position: static;
}
.tophead .homepage {
    text-align: center;
    padding-left: 140px;
}
</style>
</head>

<body>
<div class="tophead">
    <div class="logo">名片网后台管理</div>
    <div class="logininfo">

    <?php
    session_start();

    $username = $_SESSION['username'];
    echo "hi ". '<a href="">'.$username.'</a>'; 
    echo " | ".'<a href="login.php?action=logout" target="index.php">Logout</a>';
    ?>
    </div>
    <div class="homepage"><a href="../index/index.html" target="_parent">名片网首页</a></div>
</div>
</body>
</html>

