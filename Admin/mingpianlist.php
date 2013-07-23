<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    width:1000px;
        height: 600px;
    margin-top:10px;
    margin-left:auto;
    margin-right:auto;
}

#main table tr td
{
    font-size:10px;
    color: #003F7D;
}

.page
{
    float: left;
    font-size:10px;
    color: #003F7D;
    margin:0;
    padding:0;
    background-color:#FFFFFF;
    width:1000px;
    text-align:center;
    padding-bottom: 20px;
}


</style>

</head>
<body>
<div id="main">
    <table width="1000"  height="60" cellpadding="8" cellspacing="1" bgcolor="#003F7D">
        <tr bgcolor="#FFFFFF" align="center">
            <th width="110">名片所有人</th>
            <th width="128">头衔</th>
            <th width="191">所属公司</th>
            <th width="154">联系电话</th>
            <th width="58">年龄</th>
            <th width="266">备注信息</th>
            <th width="91">操作</th>
        </tr>
    

        <?php
                /*****************************
                分页控制
                *****************************/
                error_reporting(0);
                include_once 'conn.php';

                if(isset($_GET['page'])){ 
                        $page = intval($_GET['page']);
                } else {
                        $page=1;
                }

                $sql = "SELECT weibo_id FROM weibo";
                $sqllist = mysql_query($sql, $conn);
                $count = mysql_num_rows($sqllist);
                $pagemax = 12;  //每页最大条数
                $limit = (($page-1)*$pagemax);
                $page = (int)((($count-1)/$pagemax)+1);

                $sqll = "SELECT * FROM weibo ORDER BY weibo_id DESC LIMIT $limit,$pagemax";
                $sqlllist = mysql_query($sqll, $conn);
                
        while($list=mysql_fetch_array($sqlllist)){
            echo '<tr bgcolor="#FFFFFF">';
            echo '<td width="110" align="center">';
            echo $list['name'];
            echo '</td>';

            echo '<td width="128" align="center">';
            echo $list['verified'];
            echo '</td>';

            echo '<td width="191" align="center">';
            echo $list['company'];
            echo '</td>';

            echo '<td width="154" align="center">';
            echo $list['weibo_id'];
            echo '</td>';

            echo '<td width="58" align="center">';
            echo $list['category_id'];
            echo '</td>';

            echo '<td width="266" align="center">';
            echo $list['info'];
            echo '</td>';

            echo '<td width="91" align="center">';
            echo '<a href="">编辑</a> | <a href="">删除</a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    </div>
    <div class="page">
                            <?php
                            $curpage = $_GET['page'];
                            if(!isset($_GET['page'])){
                               $curpage = 1;
                            }

                            echo '共'.$count.'条记录 ';
                            echo $curpage.'/'.$page.' ';
                            echo '<a href="?page=1">首页  </a>';
                            if($curpage <= 0){
                                echo '<a href="">上一页  </a>';
                            }else{
                                echo '<a href="?page='.($curpage-1).'">上一页  </a>';
                            }
                            
                            echo '<a href="?page='.($curpage+1).'">下一页  </a>';
                            echo '<a href="?page='.$curpage = $page.'">尾页 </a>';                                                             
                            ?>
    </div>
</body>
</html>


