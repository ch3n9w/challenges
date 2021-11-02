<?php
highlight_file(__FILE__);
$PUB_KEY = '-----BEGIN PUBLIC KEY-----
MCwwDQYJKoZIhvcNAQEBBQADGwAwGAIRAJRkmrj+EHdlFV06TCGbO10CAwEAAQ==
-----END PUBLIC KEY-----';

$pub_key  = openssl_pkey_get_public($PUB_KEY);
$cmd = base64_decode($_POST['s']);
$sign = base64_decode($_POST['sign']);
$dec = "";
openssl_public_decrypt($sign, $dec, $pub_key);
if ($dec != $cmd){
        die('verify fail');
}                           
ob_start();                     
$result = system($cmd);           
$result = ob_get_contents();                           
ob_end_clean();                                        
$result = str_split($result, 5);                       
foreach($result as $o){                                
        openssl_public_encrypt($o, $sub_enc, $pub_key);
        $arr[]=base64_encode($sub_enc);
}                    
foreach($arr as $o){ 
        echo $o."\n";
}
