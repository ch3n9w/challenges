<?php

$UPLOAD_TARGET = '/tmp/uploads';


function if_init(){
    global $UPLOAD_TARGET;
    $web_uploads = '/var/www/html/uploads';
    if (!is_dir($UPLOAD_TARGET) or !is_writable($UPLOAD_TARGET) or !is_readable($UPLOAD_TARGET) or !is_executable($UPLOAD_TARGET))
        die('please wait for initing');
    if (!is_dir($web_uploads) or !is_writable($web_uploads) or !is_readable($web_uploads) or !is_executable($web_uploads))
        die('please wait for initing');
}

// if_init();
if(isset($_FILES)){

    // create unique directory for each user
    $user_dir = md5($_SERVER['REMOTE_ADDR']);
    $user_dir = $UPLOAD_TARGET.'/'.$user_dir;
    if (!is_dir($user_dir)) {
        mkdir($user_dir, 0777, true);
    }

    // limit file size
    if($_FILES['upfile']['size'] > 1000000) {
        die("Too Big!");
    }


    try {
        system('unzip -n '.escapeshellarg($_FILES['upfile']['tmp_name']).' -d '.$user_dir);
        echo $user_dir;
    } catch (Exception $e) {
        var_dump($e->getMessage());
        pass;
    }

}
?>

<html>
<head>
    <title>Upload Zip archive service</title>
</head>
<body>
    <form method="post" action="index.php" enctype="multipart/form-data">
        <label for="file">Filename:</label>
        <input type="file" name="upfile" id="file"/>
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>
