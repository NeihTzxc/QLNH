<?php 
require 'connect.php';
$tennv = mysqli_real_escape_string($conn, $_POST['tennv']);
$ngaysinh = mysqli_real_escape_string($conn, $_POST['ngaysinh']);
$diachi = mysqli_real_escape_string($conn, $_POST['diachi']);
$sdt = mysqli_real_escape_string($conn, $_POST['sdt']);
$vitri = mysqli_real_escape_string($conn, $_POST['vitri']);


$sql ="insert into nhanvien(tennv,ngaysinh,diachi,sdt,vitri) values ('$tennv','$ngaysinh','$diachi','$sdt','$vitri');";


if(!mysqli_query($conn,$sql))
{
die ('Loi sql'.mysql_error($conn));
}
 // echo "Them thanh cong";
header("Location:nhanvienlist.php");
 ?>
