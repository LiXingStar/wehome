<?php
$file = $_FILES['file'];
$movePath = '../uploads';
if(!is_dir($movePath)){
    mkdir($movePath);
}
$date = date('Ymd');
$movePath .= '/'.$date;
if(!is_dir($movePath)){
    mkdir($movePath);
}
$imgname = time() . mt_rand(0,9999);
$ext = explode('/',$file['type']);
$ext = array_pop($ext);

$movePath .= '/' . $imgname.'.'.$ext;
if(move_uploaded_file($file['tmp_name'],$movePath)){
    $webPath = '/wehome/uploads/'.$date.'/'.$imgname.'.'.$ext;
    echo json_encode([
       'code'=>200,
       'msg'=>'图片上传成功',
       'data'=> $webPath
    ]);
}else{
    echo json_encode([
        'code'=>404,
        'msg'=>'图片上传失败'
    ]);
}




