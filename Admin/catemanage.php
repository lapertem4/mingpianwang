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
	<table width="500"  height="60" cellpadding="8" cellspacing="1" bgcolor="#003F7D">
		<tr bgcolor="#FFFFFF" align="center">
			<th width="100">��ĿID</th>
			<th width="240">��Ŀ����</th>
			<th width="240">����Ŀ����</th>
			<th width="60">����</th>
		</tr  >
	

		<?php
                /*****************************
                ��ҳ����
                *****************************/
                error_reporting(0);
                include_once 'conn.php';

                if(isset($_GET['page'])){ 
                        $page = intval($_GET['page']);
                } else {
                        $page=1;
                }

                $sql = "SELECT id FROM categories";
                $sqllist = mysql_query($sql, $conn);
                $count = mysql_num_rows($sqllist);
                $pagemax = 12;  //ÿҳ�������
                $limit = (($page-1)*$pagemax);
                $page = (int)((($count-1)/$pagemax)+1);

                $sqll = "SELECT * FROM categories ORDER BY id DESC LIMIT $limit,$pagemax";
                $sqlllist = mysql_query($sqll, $conn);
                
		while($list=mysql_fetch_array($sqlllist)){
			echo '<tr bgcolor="#FFFFFF">';
			echo '<td width="100" align="center">';
			echo $list['id'];
			echo '</td>';

			echo '<td width="240" align="center">';
			echo $list['name'];
			echo '</td>';

			echo '<td width="240" align="center">';
			echo $list['parent_name'];
			echo '</td>';

			echo '<td width="60" align="center">';
			echo '<a href="">�༭</a> | <a href="">ɾ��</a>';
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

                            echo '��'.$count.'����¼ ';
                            echo $curpage.'/'.$page.' ';
                            echo '<a href="?page=1">��ҳ  </a>';
                            if($curpage <= 0){
                                echo '<a href="">��һҳ  </a>';
                            }else{
                                echo '<a href="?page='.($curpage-1).'">��һҳ  </a>';
                            }
                            
                            echo '<a href="?page='.($curpage+1).'">��һҳ  </a>';
                            echo '<a href="?page='.$curpage = $page.'">βҳ </a>';                                                             
                            ?>
    </div>
</body>
</html>


