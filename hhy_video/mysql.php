<?php
$dbhost = '49.233.84.49';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = 'lchcl0655';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('Could not connect: ' . mysqli_error());
}
echo '数据库连接成功！';
mysqli_close($conn);
?>