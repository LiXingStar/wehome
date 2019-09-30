<?php
// 展示页面  获取数据
require '../lib/db.php';

$sql = "select * from nav order by nsort desc";

$result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

require '../view/admin/navselect.html';


