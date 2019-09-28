<?php
$mysql = new mysqli('localhost','root','','wehome',3306);
if($mysql->connect_errno){
    echo '数据库连接失败,失败原因' . $mysql->connect_errno;
    exit();
}
$mysql->query("set names utf8");
