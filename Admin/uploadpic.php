

<?php
//上传文件类型列表
$uptypes=array(
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png'
);

$max_file_size=2000000;     //上传文件大小限制, 单位BYTE
$destination_folder="../upload/"; //上传文件路径
$imgpreview=1;      //是否生成预览图(1为生成,其他为不生成);
$imgpreviewsize=1/2;    //缩略图比例
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title></title>
<style type="text/css">

body
{
     font-size: 9pt;
}
input
{
     background-color: #FFFFFF;
     border: 1px solid #CCCCCC;
}

</style>
</head>

<body>
<form enctype="multipart/form-data" method="post" name="upform">
    名片名: <input name="cardname" type="text" id="cardname" size="15" /></br>
    职业：<input name="job" type="text" id="job" size="15" /></br>
    简介: <textarea name="comment" id="comment" rows="10" cols="45" sytle="resize:none;"></textarea>
    来一发头像吧:
    <input name="upfile" type="file"></br>
    允许上传的文件类型为:<?=implode(', ',$uptypes)?>
    <input type="submit" value="上传"></br>

  </br>
  
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (@!is_uploaded_file($_FILES["upfile"][tmp_name]))
    //是否存在文件
    {
         echo "图片不存在!";
         exit;
    }

    $file = $_FILES["upfile"];
    if($max_file_size < $file["size"])
    //检查文件大小
    {
        echo "文件太大!";
        exit;
    }

    if(!in_array($file["type"], $uptypes))
    //检查文件类型
    {
        echo "文件类型不符!".$file["type"];
        exit;
    }

    if(!file_exists($destination_folder))
    {
        mkdir($destination_folder);
    }

    $filename=$file["tmp_name"];
    $image_size = getimagesize($filename);
    $pinfo=pathinfo($file["name"]);
    $ftype=$pinfo['extension'];
    $destination = $destination_folder.time().".".$ftype;
    if (file_exists($destination) && $overwrite != true)
    {
        echo "同名文件已经存在了";
        exit;
    }

    if(!move_uploaded_file ($filename, $destination))
    {
        echo "移动文件出错";
        exit;
    }


    $pinfo=pathinfo($destination);
    @$fname=$pinfo[basename];
    include_once 'conn.php';
    mysql_query("SET NAMES gbk");
    $cardname = $_POST['cardname'];
    $picfile = $destination_folder.$fname;
    $sql = "INSERT INTO mingpian_card (name, picfile)
            VALUES ('$cardname','$picfile')";
    if(mysql_query($sql,$conn)){
            echo " <font color=red>已经成功上传</font><br>文件名:  <font color=blue>".$destination_folder.$fname."</font><br>";
            echo " 宽度:".$image_size[0];
            echo " 长度:".$image_size[1];
            echo "<br> 大小:".$file["size"]." bytes";
    }else{
      echo mysql_error();
      exit('you piece of ..');
    }

    /*
    if($watermark==1)
    {
        $iinfo=getimagesize($destination,$iinfo);
        $nimage=imagecreatetruecolor($image_size[0],$image_size[1]);
        $white=imagecolorallocate($nimage,255,255,255);
        $black=imagecolorallocate($nimage,0,0,0);
        $red=imagecolorallocate($nimage,255,0,0);
        imagefill($nimage,0,0,$white);
        switch ($iinfo[2])
        {
            case 1:
            $simage =imagecreatefromgif($destination);
            break;
            case 2:
            $simage =imagecreatefromjpeg($destination);
            break;
            case 3:
            $simage =imagecreatefrompng($destination);
            break;
            case 6:
            $simage =imagecreatefromwbmp($destination);
            break;
            default:
            die("不支持的文件类型");
            exit;
        }

        imagecopy($nimage,$simage,0,0,0,0,$image_size[0],$image_size[1]);
        imagefilledrectangle($nimage,1,$image_size[1]-15,80,$image_size[1],$white);

        switch($watertype)
        {
            case 1:   //加水印字符串
            imagestring($nimage,2,3,$image_size[1]-15,$waterstring,$black);
            break;
            case 2:   //加水印图片
            $simage1 =imagecreatefromgif("xplore.gif");
            imagecopy($nimage,$simage1,0,0,0,0,85,15);
            imagedestroy($simage1);
            break;
        }

        switch ($iinfo[2])
        {
            case 1:
            //imagegif($nimage, $destination);
            imagejpeg($nimage, $destination);
            break;
            case 2:
            imagejpeg($nimage, $destination);
            break;
            case 3:
            imagepng($nimage, $destination);
            break;
            case 6:
            imagewbmp($nimage, $destination);
            //imagejpeg($nimage, $destination);
            break;
        }

        //覆盖原上传文件
        imagedestroy($nimage);
        imagedestroy($simage);
    }
    */

    if($imgpreview==1)
    {
    echo "<br>图片预览:<br>";
    echo "<img src=\"".$destination."\" width=".($image_size[0]*$imgpreviewsize)." height=".($image_size[1]*$imgpreviewsize);
    echo " alt=\"图片预览:\r文件名:".$destination."\r上传时间:\">";
    }
}
?>
</body>
</html>
