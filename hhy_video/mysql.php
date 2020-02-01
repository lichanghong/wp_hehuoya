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

$sql = "select * from hhy_vip_video;";
$res = $mysqli->query($sql);
if (!$res) {
    die("sql error:\n" . $mysqli->error);
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
    
 while ($row = $res->fetch_assoc()) {
     $vv=new Vip_Video();
     $vv->video_title=$row->video_title;
     echo "videotitle=".$row;
     $vv->cover_img=$row->cover_img;
     $vv->video_desc=$row->video_desc;
     $vv->video_url=$row->video_url;
     $vv->submission_date=$row->submission_date;
     //填充数组
     $arr[]=$vv;
 }
//对变量进行json编码
echo json_encode(array("state"=>"success",'vip_videos'=>$arr));

$res->free();
$mysqli->close();
?>
 
 
 
 
