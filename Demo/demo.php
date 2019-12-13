<?php
require ('DB_driver.php');
 
// Tạo Mới Đối Tượng
// $db = new Database();
// $db->error();
//INSERT

    $data= [
    'tenmon' => 'ga chien',
    'madanhmuc'=>'1',
    'gia'=>'100000',
    'size'=>'lon'
    ];
    $db = new Database();
    if($db->insert('monan', $data)){
        echo 'Thêm thành công';
    }else {
        echo "Lỗi: " .$db->error();
    }
?>