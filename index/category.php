<?php
// 1:n
require '../lib/db.php';
require 'header.php';
$id = $_GET['id'];

$sql = "select * from nav where id=$id";
$nav = $mysql->query($sql)->fetch_assoc();
$tpl = $nav['ntpl'];

$is = file_exists('../view/index/'.$tpl.'.html');


if($is) {

    require '../view/index/' . $tpl . '.html';
}else{
    require '../view/index/404.html';
}
