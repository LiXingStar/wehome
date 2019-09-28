<?php
//  1.展示登陆页面   2.验证
//  请求方式 GET  POST
$method = $_SERVER['REQUEST_METHOD'];
if($method === 'GET'){
    // 1
    require '../view/admin/login.html';
}else{
    // 2
    $username = $_POST['username'];
    $password =  md5(crypt($_POST['password'],md5('wehome')));

    $mysql = new mysqli('localhost','root','','wehome',3306);
    if($mysql->connect_errno){
        echo '数据库连接失败,失败原因' . $mysql->connect_errno;
        exit();
    }
    $mysql->query("set names utf8");

    $sql = "select * from manage where username='$username'";
    $result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
    if(count($result)){
        if($password == $result[0]['password']){
            echo json_encode([
                'code'=>200,
                'msg'=>'登陆成功'
            ]);
        }else{
            echo json_encode([
                'code'=>404,
                'msg'=>'用户名和密码不匹配'
            ]);
        }
    }else{
        echo json_encode([
           'code'=>404,
           'msg'=>'用户名不存在'
        ]);
    }

}
?>



