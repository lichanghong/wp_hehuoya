<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
 <title>合伙呀视频</title>

 <style type="text/css">
body,html {margin:0; height:100%;}
</style>
<script data-ad-client="ca-pub-6387872276467622" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>
<script src="https://s2.pstatp.com/cdn/expire-1-M/dplayer/1.25.0/DPlayer.min.js" type="application/javascript"></script>
<link href="https://s0.pstatp.com/cdn/expire-1-M/dplayer/1.25.0/DPlayer.min.css" type="text/css" rel="stylesheet" />
<script src="https://s0.pstatp.com/cdn/expire-1-M/hls.js/0.10.1/hls.min.js" type="application/javascript"></script>

<style> 
.div-relative{position:relative; } 
/* css注释说明： 背景为红色 */ 
.ads{ position:absolute; left:50px; top:60px; background:#FF0; width:90%; height:30%;display: none;} 
.close{ position:absolute; background:red;height:30px;width:30px;left:5px; top:5px;font-size:12px} 

/* 背景为黄色 */ 
</style> 

<body>
 
<?php
$parse="https://www.8090g.cn/?url=";
$url=$_GET['url'];
$target=$parse.$url;

function endWith($haystack, $needle) {   
      $length = strlen($needle);  
      if($length == 0)
      {    
          return true;  
      }  
      return (substr($haystack, -$length) === $needle);
 }

if (endWith($url,"m3u8")) {	 
echo '<div class="div-relative"> ';
echo '<div id="dplayer"></div> ';
echo '<div class="ads">';
echo '<div class="close">关闭</div> ';
echo '</div> ';
echo '</div> ';
}
else {
	echo '<div style="width:100%;height:100%;">';
    echo '<iframe id="WANG" scrolling="no" allowfullscreen="true" allowtransparency="true" frameborder="0"';
    echo "src=\"".$target."\"";
    echo 'width="100%" height="100%"></iframe>';  
}
 
?>

<script type="text/javascript">
	function isNotNull(ele){
  if(typeof ele==='undefined'){//先判断类型
    return false;
  }else if(ele==null){
    return false;
  }else if(ele==''){
    return false;
  }
  return true;
}
	var dplayer_element=document.getElementById('dplayer');
	if (isNotNull(dplayer_element)) {
		var url="<?php echo $url;?>";
		const dp = new DPlayer({
    container: document.getElementById('dplayer'),
    autoplay: true,
    theme: '#FADFA3',
    loop: false,
    lang: 'zh-cn',
    screenshot: true,
    hotkey: true,
    preload: 'auto',
    logo: 'https://img.zcool.cn/community/0129b857fcf1a0a84a0d304f5bf818.jpg@1280w_1l_2o_100sh.jpg',
    volume: 0.7,
    mutex: true,
    video: {
        url: url,
        pic: 'https://img.zcool.cn/community/0129b857fcf1a0a84a0d304f5bf818.jpg@1280w_1l_2o_100sh.jpg',
        thumbnails: 'https://img.zcool.cn/community/0129b857fcf1a0a84a0d304f5bf818.jpg@1280w_1l_2o_100sh.jpg',
        type: 'auto',
    },
    contextmenu: [
        {
            text: '欢迎来到合伙呀视频',
            link: 'https://hehuoya.com',
        },
        {
            text: '支持我们请点击广告^_^',
            click: (player) => {
                window.location.href="https://hehuoya.com";
            },
        },
    ],
 
		});
	 	dp.play();

	}
   



    


</script>

        
</body>
</html>
  
