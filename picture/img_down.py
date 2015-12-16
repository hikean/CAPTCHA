# -*- coding: utf-8 -*-

import requests

def download_img(url='', file_path='0.jpg'):
    headers = {'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
           'Upgrade-Insecure-Requests': '1',
           'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2541.0 Safari/537.36',
           }
    r = requests.get(url, headers=headers)
    with open(file_path, 'wb') as f:
        f.write(r.content)
