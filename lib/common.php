<?php

/*
 *  连接数组属性
 * */
function joinKeys($arr)
{
    $str = '';
    foreach ($arr as $key => $value) {
        $str .= $key . ',';
    }
    $str = substr($str, 0, -1);
    return $str;
}


/*
 *  连接数组元素
 * */
function joinValues($arr)
{
    $str = '';
    foreach ($arr as $key => $value) {
        $str .= "'$value',";
    }
    $str = substr($str, 0, -1);
    return $str;
}

/*
 *  拼接键值对
 *  $arr关联数组
 * */
function joinKeysValues($arr)
{
    $str = '';
    foreach ($arr as $key => $value) {
        $str .= "$key='$value',";
    }
    $str = substr($str, 0, -1);
    return $str;
}
