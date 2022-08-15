<?php
if(!defined('ALLOW_ACCESS')) { die('Access Denied');}

function DBConnect($configFile = '')
{
    if (!file_exists($configFile)) {
        $configFile = ROOT_PATH . '/config.php';
    }
    include $configFile;
    include_once ROOT_PATH . '/source/class/DB.class.php';
    $dbType = 'mysql';
    $db = BlueDB::DB($dbType);
    $db->Connect(
        $config[$dbType]['dbHost'],
        $config[$dbType]['dbUser'],
        $config[$dbType]['dbPwd'],
        $config[$dbType]['database'],
        $config[$dbType]['charset'],
    );
    return $db;
}

function HashString($source) {
    return md5(strval($source));
}

function InitSmarty()
{
    include_once ROOT_PATH . '/libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->template_dir = TEMPLATE_PATH . '/templates';
    return $smarty;
}



/* 获得IP */
function IP()
{
    return $_SERVER['REMOTE_ADDR'];
}

/* StripStr 过滤字符 */
function StripStr($str)
{
    if (get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return addslashes(htmlspecialchars($str, ENT_QUOTES));
}

/* 获得http referer */
function HTTP_REFERER()
{
    return htmlspecialchars($_SERVER['HTTP_REFERER']);
}

function Val($name, $method = 'GET', $type = 0, $isArray = 0)
{
    if ($name == '' || !is_string($name)) {
        return '';
    }
    $method = strtoupper($method);
    switch ($method) {
    case 'GET':
        $value = $_GET[$name] ?? '';
        break;
    case 'POST':
        $value = $_POST[$name] ?? '';
        break;
    case 'COOKIE':
        $value = $_COOKIE[$name] ?? '';
        break;
    case 'REQUEST':
        $value = $_REQUEST[$name] ?? '';
        break;
    case 'SERVER':
        $value = $_SERVER[$name] ?? '';
        break;
    default:
        break;
    }
    $isArray = intval($isArray);
    switch ($type) {
    case 0:
    case 'string':
        $value = ($isArray == 0) ? StripStr($value) : array_map('StripStr', (array)$value);
        break;
    case 1:
    case 'int':
        $value = ($isArray == 0) ? intval($value) : array_map('intval', (array)$value);
        break;
    case 2:
    default:
        break;
    }
    return $value;
}

/* json_enocde */
function JsonEncode($value)
{
    return json_encode($value);
}

/* 正确提示 */
function ShowSuccess($str = '', $turnto = URL_ROOT, $urltitle = '返回')
{
    if ($turnto == URL_ROOT) {
        Notice($str, $turnto . '/index.php', 3, 'success', $urltitle);
    } else {
        Notice($str, $turnto, 3, 'success', $urltitle);
    }
}

/* 错误提示 */
function ShowError($str = '', $turnto = URL_ROOT, $urltitle = '返回')
{
    if ($turnto == URL_ROOT) {
        Notice($str, $turnto . '/index.php', 3, 'error', $urltitle);
    } else {
        Notice($str, $turnto, 3, 'error', $urltitle);
    }
}

/* 统一提示方法 */
function Notice($str = '', $turnto = URL_ROOT, $time = 3, $style = 'success', $urltitle)
{
    global $show, $url;
    $notice = array(
        'str' => $str,
        'turnto' => $turnto,
        'time' => $time,
        'style' => $style,
        'urltitle' => $urltitle
    );
    $smarty = InitSmarty();
    $smarty->assign('show', $show);
    $smarty->assign('url', $url);
    $smarty->assign('notice', $notice);
    $smarty->display('notice.html');
    exit;
}

/* UBB To HTML */
function UBBToHTML($str = '')
{
    if (!empty($str)) {
        $str = preg_replace("/\[(b|i|u)\](.*?)\[\/\\1\]/is", "<$1>$2</$1>", $str);
        $str = preg_replace("/\[code\](.*?)\[\/code]/ise", "DoCode('$1')", $str);
        $str = str_replace("\n", '<br />', $str);
        $str = preg_replace(
            "/\[link\s+?href=(\'\"|&quot;)(.*?)\\1\](.*?)\[\/link\]/i",
            "<a target=\"_blank\" href=\"$2\">$3</a>", $str
        ); //链接
        $str = preg_replace(
            "/\[img\s+?src=(\'\"|&quot;)([\w\:\/\.]*?\/\w+?\.(jpg|jpeg|gif|png))\s*?\\1(\s+alt=(\'\"|&quot;)(.*?)\\5\s*?)?\/]/i",
            "<a target=\"_blank\" href=\"$2\" title=\"$6\"><img src=\"$2\" alt=\"$6\" /></a>", $str
        ); //图片
        $str = preg_replace(
            "/\[video\s+?href=(\'\"|&quot;)([\w\:\/\.]*?\/\w+?\.swf)\s*?\\1\/]/i",
            "<embed src=\"$2\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"never\" allowfullscreen=\"true\" wmode=\"opaque\" width=\"480\" height=\"400\"></embed>",
            $str
        ); //视频
        $str = str_replace('  ', '&nbsp;&nbsp;', $str);
        $str = str_replace("\t", '&nbsp;&nbsp;', $str);
    }
    return $str;
}

function DoCode($str)
{
    $str = trim($str);
    return '<code>' . $str . '</code>';
}

/* 获得文件后缀 */
function FileSuffix($name)
{
    $lastPos = strrpos($name, '.');
    $suffix = $lastPos ? substr($name, $lastPos + 1, strlen($name) - $lastPos) : '';
    return strtolower($suffix);
}

/* GetTimeShow $time的人性化显示 */
function GetTimeShow($time = 0)
{
    $diff = time() - $time;
    $num = 0;
    $unit = '';
    if ($diff < 60) {
        $num = $diff;
        $unit = '秒';
    } elseif ($diff < 3600) {
        $num = intval($diff / 60);
        $unit = '分钟';
    } elseif ($diff < 86400) {
        $num = intval($diff / 3600);
        $unit = '小时';
    } elseif ($diff < 2592000) {
        $num = intval($diff / 86400);
        $unit = '天';
    } elseif ($diff < 31104000) {
        $num = intval($diff / 2592000);
        $unit = '月';
    } else {
        $num = intval($diff / 31104000);
        $unit = '年';
    }
    return $num . $unit . '前';
}


/* Tb 获取table name */
//function Tb($name)
//{
//    return TABLE_PREFIX . $name;
//}

/* 短网址字符 */



/*网页访问容错代码*/
function vita_get_url_content($url)
{
    if (function_exists('file_get_contents')) {
        $file_contents = file_get_contents($url);
    } else {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);
    }
    return $file_contents;
}


?>
