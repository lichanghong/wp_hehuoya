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
# # 忽略警告：InsecureRequestWarning: Unverified HTTPS request is being made. Adding certificate verification is strongly advised.
# requests.packages.urllib3.disable_warnings()
# # 一个PoolManager实例来生成请求, 由该实例对象处理与线程池的连接以及线程安全的所有细节
# http = urllib3.PoolManager()
# # 通过request()方法创建一个请求：
# url = "https://www.iqiyi.com/dianying_new/i_list_zuixinshangxian.html"
# html_content = http.request('GET', url).data.decode()
# soup_ccontent = bs4(html_content, 'html.parser')
#
# ul_content = soup_ccontent.find("ul", class_="site-piclist")
# li_content = ul_content.find_all("li")
#
# for li in li_content:
#     content = li.a['href'], "https:"+li.img['src']
#     print(content)
#     print(li.a['title'])
#     print(li.find('p', class_="site-piclist_info_describe").string)

# 数据库的链接
import pymysql
db = pymysql.connect("localhost","root","lchcl0655","TESTDB")
cursor = db.cursor()
print(cursor.fetchone())
db.close()
