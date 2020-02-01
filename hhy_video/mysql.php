<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <link type="text/css" rel="stylesheet" href="https://stc.iqiyipic.com/css/uniqy/main/playerPopup.css">
    <link type="text/css" rel="stylesheet" href="https://stc.iqiyipic.com/gaze/uniqy/main/css/playMovie.08c08943.css">
    <link type="text/css" rel="stylesheet" href="https://stc.iqiyipic.com/css/uniqy/main/barrage.2a919d2f.css">
</head>
<body>
    <!-- 中部框架 -->
    <div class="qy-mod-list qy-mod-list-wrap">
        <ul class="qy-mod-ul qy-mod-ul-collect">
            <!-- begin php -->
<?php
$mysql_conf = array(
    'host'    => 'localhost',
    'db'      => 'hhy_vip_video_db',
    'db_user' => 'root',
    'db_pwd'  => 'lchcl0655',
    );

$mysqli = @new mysqli($mysql_conf['host'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);
if ($mysqli->connect_errno) {
    die("could not connect to the database:\n" . $mysqli->connect_error);//诊断连接错误
}
$mysqli->query("set names 'utf8';");//编码转化
$select_db = $mysqli->select_db($mysql_conf['db']);
if (!$select_db) {
    die("could not connect to the db:\n" .  $mysqli->error);
}

//新建数组
$arr=array();
//2.转换为对象，处理数据
class Vip_Video{
    public $video_title;
    public $cover_img;
    public $video_desc;
    public $video_url;
    public $submission_date;
}

$sql = "select * from hhy_vip_video;";
if ($result = $mysqli->query($sql)) {
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $vv=new Vip_Video();
        $vv->video_title=$row["video_title"];
        $vv->video_title=$row["hhy_id"]; //lch debug
        $vv->cover_img=$row["cover_img"];
        $vv->video_desc=$row["video_desc"];
        $vv->video_url=$row["video_url"];
        $vv->submission_date=$row["submission_date"];
        $arr[]=$vv;
        echo "<li class=\"qy-mod-li\" index=\"1\">";
        echo "  <div class=\"qy-mod-img vertical\">";
        echo         "<div class=\"qy-mod-link-wrap\">";
        echo            "<a href=\"https://www.iqiyi.com/v_19rrobodng.html?vfrm=pcw_playpage&amp;vfrmblk=G&amp;vfrmrst=80521_like_image1\" title=\"".$vv->video_title."\" rseat=\"80521_like_image1\" target=\"_blank\" class=\"qy-mod-link\">";
         echo                  "<img rseat=\"80521_like_image1\" src=\"".$vv->cover_img."\" data-pb=\"c1=1\" class=\"qy-mod-cover fadeOutIn-enter-active\">";
         echo "</a>";
                echo "</div>";
                    echo "<div title=\"".$vv->video_title."\" class=\"title-wrap\">";
                        echo "<p class=\"main\">";
                            echo "<a rseat=\"80521_like_title1\" href=\"//www.iqiyi.com/v_19rrobodng.html?vfrm=pcw_playpage&amp;vfrmblk=G&amp;vfrmrst=80521_like_title1\" title=\"".$vv->video_title."\" target=\"_blank\" data-pb=\"c1=1\" class=\"link-txt\">".$vv->video_title."";
                            echo "</a>";
                        echo "</p>";
                        echo "<p title=\"".$vv->video_desc."\" class=\"sub\">".$vv->video_desc."";
                        echo "</p>";
                    echo "</div>";
                echo "</div>";
            echo "</li>";
    }
    // echo json_encode(array("state"=>"success",'vip_videos'=>$arr));

    /* free result set */
    $result->free();
}

//echo json_encode($result) ;
$mysqli->close();
?>
         </ul>


    </div>
</body>
 
</html>





 
 
 
 
