<?php
// 展示商品添加页面  插入数据
$method = $_SERVER['REQUEST_METHOD'];
require '../lib/db.php';

if($method === 'GET'){
    $sql = "select * from category order by id desc";
    $result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
    require '../view/admin/goodsinsert.html';
}else{
    require '../lib/common.php';
    $data = $_POST;
    date_default_timezone_set('PRC');
    $data['create_time'] = date('Y-m-d h:i:s');
    $keys = joinKeys($data);
    $values = joinValues($data);
    $sql = "insert into goods ($keys) values ($values)";
    $mysql->query($sql);
    $num = $mysql->affected_rows;
    if ($num > 0) {
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


