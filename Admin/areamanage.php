<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<style type="text/css">
body
{
    margin:0;
    padding:0;
    text-align:center;
}
a, a:visited, a:hover, a:active { text-decoration: none; color: inherit; }

#main
{
	width:400px;
        height: 1200px;
	margin-top:40px;
	margin-left:250px;
	margin-right:auto;
}

#main table tr td
{
    font-size:10px;
    color: #003F7D;
}



</style>

</head>
<body>
    <div id="main">
    	<table width='400' height='125' bgcolor="#003F7D" cellpadding="8" cellspacing="1">
            <tr bgcolor="#FFFFFF" height="25">
                <td>地区ID</td>
                <td>地区名称</td>
                <td>所在名片数</td>
                <td>用户数</td>
            </tr>
            <?php
                error_reporting(0);
                include_once 'conn.php';

                $sql = "SELECT * FROM area ORDER BY areaid ASC ";
                $sqldata = mysql_query($sql, $conn);
                
                while($list=mysql_fetch_array($sqldata)){
                    echo '<tr bgcolor="#FFFFFF">';
                    echo '<td width="80" align="center">';
                    echo $list['areaid'];
                    echo '</td>';

                    echo '<td width="150" align="center">';
                    echo $list['name'];
                    echo '</td>';

                    echo '<td width="100" align="center">';
                    echo '';
                    echo '</td>';

                    echo '<td width="100" align="center">';
                    echo '';
                    echo '</td>';

                    
                }
            ?>
        </table>
    </div>
</body>
</html>


