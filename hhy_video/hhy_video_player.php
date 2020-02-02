<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
 <title>合伙呀视频</title>
</head>
<body>
 
<?php
$parse="https://www.8090g.cn/?url=";
$url=$_GET['url'];
$target=$parse.$url;
    echo '<div style="width:100%;height:100%;">';
    echo '<iframe id="WANG" scrolling="no" allowfullscreen="true" allowtransparency="true" frameborder="0"';
    echo "src=\"".$target."\"";
    echo 'width="100%" height="100%"></iframe>';
echo $target;
   
?>
        
</body>
</html>
  
