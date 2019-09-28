<?php
require '../lib/db.php';
$sql = "select * from category order by id desc";
$result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

require '../view/admin/cateselect.html';
