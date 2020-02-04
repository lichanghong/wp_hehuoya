#!/usr/local/bin/python3
# encoding: utf-8

'''
@author: wenyali
@contact: 2917073217@qq.com
@file: aiqiyi_pachong.py
@time: 2020/2/2 12:32 PM

'''

from bs4 import BeautifulSoup as bs4

import urllib3
import requests
import sys
import codecs
sys.stdout = codecs.getwriter("utf-8")(sys.stdout.detach())

requests.packages.urllib3.disable_warnings()
http = urllib3.PoolManager()
url = "https://www.iqiyi.com/dianying_new/i_list_zuixinshangxian.html"

html_content = http.request('GET', url,).data.decode("utf-8","ignore")
soup_ccontent = bs4(html_content, 'html.parser')


ul_content = soup_ccontent.find("ul", class_="site-piclist")
li_content = ul_content.find_all("li")
# filename = 'video.sql'

import pymysql
db = pymysql.connect("localhost","root","lchcl0655","hhy_vip_video_db")
cursor = db.cursor()

for li in li_content:
    img="https:"+li.img['src'];
    desc=li.find('p', class_="site-piclist_info_describe").string
    sql = "INSERT INTO hhy_vip_video(video_title,cover_img,video_desc,video_url)values ('"+li.a['title']+"','"+img+"','"+desc+"','"+li.a['href']+"');"
    cursor.execute(sql)
    db.commit()
    
db.close()
 

 
