<?php
require '../lib/db.php';
require '../lib/common.php';
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'GET') {
    $gid = $_GET['gid'];
    $sql = "select * from goods where gid = $gid";
    $goods = $mysql->query($sql)->fetch_assoc();

    $sql = "select * from category order by id desc";
    $result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
    require '../view/admin/goodsupdate.html';
} else {

    $data = $_POST;
    $gid = $data['gid'];
    unset($data['gid']);
    $str = joinKeysValues($data);
    $sql = "update goods set $str where gid=$gid";
    $mysql->query($sql);
    if($mysql->affected_rows > 0){
        echo json_encode([
           'code'=>200,
           'msg'=>'商品修改成功'
        ]);
    }else{
        echo json_encode([
            'code'=>404,
            'msg'=>'商品修改失败'
        ]);
    }
}
