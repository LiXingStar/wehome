<?php
 require '../lib/db.php';

 $type = $_POST['type'];
 $value = $_POST['value'];
 $id = $_POST['id'];

 $sql = "update nav set $type='$value' where id=$id";
 $mysql->query($sql);

$num = $mysql->affected_rows;
if ($num) {
    echo json_encode([
        'code' => 200,
        'msg' => '更新成功'
    ]);
} else {
    echo json_encode([
        'code' => 404,
        'msg' => '更新失败'
    ]);
}
