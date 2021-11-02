
从公钥中提取出n和e
```
openssl rsa -pubin -in pubbblic -text
openssl rsa -pubin -in pubbblic -text -modulus
```

通过factordb可以分解，然后解出d

```python
import gmpy2

p = 10897303564586372033
q = 18100634715795211933

fain = (p-1) * (q-1)

e = 65537

d = gmpy2.invert(e, fain)

print(d)

print(d % (p-1))
print(d % (q-1))
print(gmpy2.invert(q,p))
```

根据https://stackoverflow.com/questions/19850283/how-to-generate-rsa-keys-using-specific-input-numbers-in-openssl 生成相对应的私钥。

```
openssl asn1parse -genconf config -out newkey.der
openssl rsa -in newkey.der -inform der -text -check
```
然后加密命令`nl /*`，长度刚好为5字符，执行完后的结果也通过私钥来解密

```php
<?php

$priv = '-----BEGIN RSA PRIVATE KEY-----
MGUCAQACEQCUZJq4/hB3ZRVdOkwhmztdAgMBAAECEQCOQAKx45sVV6dlFrPS0KgB
AgkAlzr/2wjEy8ECCQD7Ml9fbBPGnQIJAIguOc18lPJBAgkA1X0bR4sgR5UCCQCO
Vi6y7AL9dA==
-----END RSA PRIVATE KEY-----';

$pri_key = openssl_pkey_get_private($priv);
$result = "";
$cmd = 'nl /*';
openssl_private_encrypt($cmd, $result, $pri_key);

//echo base64_encode($result);
//echo base64_encode($cmd);
//
$another = "";
$sec = 'JQWxEvF5TfWww/vOsthY+A==';

openssl_private_decrypt(base64_decode($sec), $another, $pri_key);
echo $another;
```
