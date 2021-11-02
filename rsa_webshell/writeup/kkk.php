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
