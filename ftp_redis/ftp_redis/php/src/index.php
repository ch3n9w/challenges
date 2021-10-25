<?php
show_source(__FILE__);

$read = $_REQUEST['read'];
$put = $_REQUEST['put'];
$content = $_REQUEST['content'];

if(isset($read)) {
    echo file_get_contents($read);
}

if(isset($put) && isset($content)) {
    // i chmod 755 to web directory , i think it is security
    file_put_contents($put, urldecode($content));
}
?>