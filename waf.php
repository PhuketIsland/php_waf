<?php

// 替换规则
function guoLv($str){
    $str = str_replace("'", "‘", $str);
    $str = str_replace("\"", "“", $str);
    $str = str_replace("<", "《", $str);
    $str = str_replace(">", "》", $str);
    $str = str_replace("(", "（", $str);
    $str = str_replace(")", "）", $str);
    $str = str_replace(" ", "", $str);
    $str = str_replace("=", "", $str);
    return $str;
}

//过滤GET请求
foreach ($_GET as $key => $value) {
    $_GET[$key] = guoLv($value);
}

//过滤POST请求
foreach ($_POST as $key => $value) {
    $_POST[$key] = guoLv($value);
}

// 过滤header cookie
foreach($_SERVER as $key => $value) {
    $_SERVER[$key] = guoLv($value);
}