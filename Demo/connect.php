<?php
$db=array(
'server'=>'localhost',
'username'=>'root',
'password'=>'',
'database'=>'quanlynhahang'


);
$conn = mysqli_connect($db['server'],$db['username'],$db['password'],$db['database']);
if(!$conn)
{
die('ket noi khong thanh cong'.mysqli_connect_error($conn));



}
// echo "Ket noi thanh cong";



?>