

<?php
//�ϴ��ļ������б�
$uptypes=array(
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png'
);

$max_file_size=2000000;     //�ϴ��ļ���С����, ��λBYTE
$destination_folder="../upload/"; //�ϴ��ļ�·��
$imgpreview=1;      //�Ƿ�����Ԥ��ͼ(1Ϊ����,����Ϊ������);
$imgpreviewsize=1/2;    //����ͼ����
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset=gbk />
<title>ZwelLͼƬ�ϴ�����</title>
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
    ��Ƭ��: <input name="cardname" type="text" id="cardname" size="15" /></br>
    ְҵ��<input name="job" type="text" id="job" size="15" /></br>
    ���: <textarea name="comment" id="comment" rows="10" cols="45" sytle="resize:none;"></textarea>
    ��һ��ͷ���:
    <input name="upfile" type="file"></br>
    �����ϴ����ļ�����Ϊ:<?=implode(', ',$uptypes)?>
    <input type="submit" value="�ϴ�"></br>

  </br>
  
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (@!is_uploaded_file($_FILES["upfile"][tmp_name]))
    //�Ƿ�����ļ�
    {
         echo "ͼƬ������!";
         exit;
    }

    $file = $_FILES["upfile"];
    if($max_file_size < $file["size"])
    //����ļ���С
    {
        echo "�ļ�̫��!";
        exit;
    }

    if(!in_array($file["type"], $uptypes))
    //����ļ�����
    {
        echo "�ļ����Ͳ���!".$file["type"];
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
        echo "ͬ���ļ��Ѿ�������";
        exit;
    }

    if(!move_uploaded_file ($filename, $destination))
    {
        echo "�ƶ��ļ�����";
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
            echo " <font color=red>�Ѿ��ɹ��ϴ�</font><br>�ļ���:  <font color=blue>".$destination_folder.$fname."</font><br>";
            echo " ���:".$image_size[0];
            echo " ����:".$image_size[1];
            echo "<br> ��С:".$file["size"]." bytes";
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
            die("��֧�ֵ��ļ�����");
            exit;
        }

        imagecopy($nimage,$simage,0,0,0,0,$image_size[0],$image_size[1]);
        imagefilledrectangle($nimage,1,$image_size[1]-15,80,$image_size[1],$white);

        switch($watertype)
        {
            case 1:   //��ˮӡ�ַ���
            imagestring($nimage,2,3,$image_size[1]-15,$waterstring,$black);
            break;
            case 2:   //��ˮӡͼƬ
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

        //����ԭ�ϴ��ļ�
        imagedestroy($nimage);
        imagedestroy($simage);
    }
    */

    if($imgpreview==1)
    {
    echo "<br>ͼƬԤ��:<br>";
    echo "<img src=\"".$destination."\" width=".($image_size[0]*$imgpreviewsize)." height=".($image_size[1]*$imgpreviewsize);
    echo " alt=\"ͼƬԤ��:\r�ļ���:".$destination."\r�ϴ�ʱ��:\">";
    }
}
?>
</body>
</html>