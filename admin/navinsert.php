<?php
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'GET') {
    require '../view/admin/navinsert.html';
} else {
    require '../lib/common.php';
    $data = $_POST;

    $mysql = new mysqli('localhost', 'root', '', 'wehome', 3306);
    if ($mysql->connect_errno) {
        echo '数据库连接失败,失败原因' . $mysql->connect_errno;
        exit();
    }
    $mysql->query("set names utf8");

    $keys = joinKeys($data);
    $value = joinValues($data);
    $sql = "insert into nav ($keys) values ($value)";
    $mysql->query($sql);
    $num = $mysql->affected_rows;
    if ($num) {
        echo json_encode([
            'code' => 200,
            'msg' => '插入成功'
        ]);
    } else {
        echo json_encode([
            'code' => 404,
            'msg' => '插入失败'
        ]);
    }

}


