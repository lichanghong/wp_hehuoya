

CREATE DATABASE  IF NOT EXISTS hhy_vip_video_db default character set utf8 collate utf8_general_ci;

CREATE TABLE IF NOT EXISTS `hhy_vip_video`(
   `hhy_id` INT UNSIGNED AUTO_INCREMENT,
   `video_title` VARCHAR(100) NOT NULL,
   `cover_img` VARCHAR(400) NOT NULL,
   `video_desc` VARCHAR(900) NOT NULL,
   `video_url` VARCHAR(400) NOT NULL,
   `submission_date` timestamp DEFAULT NOW(),
   PRIMARY KEY ( `hhy_id` )
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
create index video_title_index on hhy_vip_video (video_title);


INSERT INTO hhy_vip_video(video_title,cover_img,video_desc,video_url) 
VALUES 
(
	"学习 vip", 
	"https://pic2.iqiyipic.com/image/20190903/2a/50/v_109509036_m_601_m4_260_360.jpg", 
	"简 介",
	"https://guihua.feifei-kuyun.com/20200124/29430_db5f5534/index.m3u8"
	);

 https://www.8090g.cn/jiexi/?url=


 <script data-ad-client="ca-pub-6387872276467622" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
