<?php 
require 'connect.php';

$manv = mysqli_real_escape_string($conn, $_POST['manv']);
// $mamon = mysqli_real_escape_string($conn, $_GET['mamon']);
$tennv = mysqli_real_escape_string($conn, $_POST['tennv']);
$ngaysinh = mysqli_real_escape_string($conn, $_POST['ngaysinh']);
$sdt = mysqli_real_escape_string($conn, $_POST['sdt']);
$diachi = mysqli_real_escape_string($conn, $_POST['diachi']);
$vitri = mysqli_real_escape_string($conn, $_POST['vitri']);

 $sql="update  nhanvien set tennv='$tennv',ngaysinh='$ngaysinh',sdt='$sdt',diachi='$diachi',vitri='$vitri' where manv=$manv;";


if(!mysqli_query($conn,$sql))
{
die ('Loi sql'.mysql_error($conn));
}
header("Location:foodlist.php");
// echo '<a  href = "foodlist.php" class="btn btn-primary">Quay lại</a>';
 ?>