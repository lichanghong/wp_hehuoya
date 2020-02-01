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
if ($result = $mysqli->query($sql)) {
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
    }
    /* free result set */
    $result->free();
}

//echo json_encode($result) ;
$mysqli->close();
?>
 
 
 
 
