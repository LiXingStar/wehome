<?php
require '../lib/db.php';

$sql ="select * from nav order by nsort desc";
$nav = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
require '../view/index/header.html';
