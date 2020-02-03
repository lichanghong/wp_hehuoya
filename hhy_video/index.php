<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <title>合伙呀影视大全 - Vip电影免费看</title>
    <meta name="referrer" content="no-referrer" />
    <link type="text/css" rel="stylesheet" href="https://stc.iqiyipic.com/css/uniqy/main/playerPopup.css">
    <link type="text/css" rel="stylesheet" href="https://stc.iqiyipic.com/gaze/uniqy/main/css/playMovie.08c08943.css">
    <link type="text/css" rel="stylesheet" href="https://stc.iqiyipic.com/css/uniqy/main/barrage.2a919d2f.css">
    <script data-ad-client="ca-pub-6387872276467622" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>
<body>
    <div style="margin-top: 30px;margin-left: 50px">免费全网影视VIP视频！ 若播放异常，刷新</div>
    <div style="margin-left: 50px">合伙呀视频</div>
    <!-- 中部框架 -->
    <div class="qy-mod-list qy-mod-list-wrap" style="margin-left: 50px;margin-bottom: 10px;margin-top: 20px">
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
        // $vv->video_title=$row["hhy_id"]; //lch debug
        $vv->cover_img=$row["cover_img"];
        $vv->video_desc=$row["video_desc"];
        $vv->video_url="http://hehuoya.com/hhy_video/hhy_video_player.php?url=".$row["video_url"];
        $vv->submission_date=$row["submission_date"];
        $arr[]=$vv;
        echo "<li class=\"qy-mod-li\" index=\"1\">";
        echo "  <div class=\"qy-mod-img vertical\">";
        echo         "<div class=\"qy-mod-link-wrap\">";
        echo            "<a href=\"".$vv->video_url."\" title=\"".$vv->video_title."\" rseat=\"80521_like_image1\" target=\"_blank\" class=\"qy-mod-link\">";
         echo                  "<img rseat=\"80521_like_image1\" src=\"".$vv->cover_img."\" data-pb=\"c1=1\" class=\"qy-mod-cover fadeOutIn-enter-active\">";
         echo "</a>";
                echo "</div>";
                    echo "<div title=\"".$vv->video_title."\" class=\"title-wrap\">";
                        echo "<p class=\"main\">";
                            echo "<a rseat=\"80521_like_title1\" href=\"".$vv->video_url."\" title=\"".$vv->video_title."\" target=\"_blank\" data-pb=\"c1=1\" class=\"link-txt\">".$vv->video_title."";
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
    <div style="text-align: center;">本站所有视频和图片均来自互联网，版权归原创者所有</div>
    <div style="margin-bottom: 100px;text-align: center;">本站视频源于互联网视频网站，系互联网抓取所得，仅供学习交流。
<div>关于合伙呀视频频道 </div>
<div>合伙呀视频频道，网址：www.hehuoya.com。是一个公益性免费网站，主要提供全网视频VIP解析服务，我们不录制视频，也不储存视频，我们只是视频的搬运工。</div>
<ul>如何找到我们：</ul>
<li>1、百度搜索《合伙呀》，请记准我们的域名再进行点击。其它冒牌的不是。</li>
<li>2、直接在浏览器输入 hehuoya.com，按回车键即可。</li>
<li>3、放入浏览器收藏夹，快捷键:ctrl + d 即可。手机访问，请在手机浏览器操作。</li>
</div>
</body>
 
</html>

 


 
 
 
 
