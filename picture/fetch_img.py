# -*- coding: utf-8 -*-

import sys
import re

import requests

from img_down import download_img

word = ' '.join(sys.argv[1:])
payload = {'tn': 'baiduimage', 'word': word, 'ie': 'utf-8'}

r = requests.get('http://image.baidu.com/search/index', params=payload)
#with open('./a.html', 'w') as f:
#    f.write(r.text.encode('utf-8'))

p = re.compile(r'(?<=thumbURL":").*?(?=",)')
res = p.findall(r.text)

#print res

for i, url in enumerate(res):
    if i >= 10:
        break
    file_name = r'./img/%d.jpg' % (i, )
    print('down %d img' % (i, ))
    print('file_name : %s' % (file_name, ))
    print('url : %s ' % (url, ))
    download_img(url=url, file_path=file_name)
