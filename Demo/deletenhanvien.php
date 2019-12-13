<?php 
require 'connect.php';
// $tenmon='ga chien';
// $madanhmuc=1;
// $size='lon';
// $gia=20000;
$manv=(int)$_GET['manv'];


 $sql ="delete from nhanvien where manv=$manv;";

if(!mysqli_query($conn,$sql))
{
die ('Loi sql'.mysql_error($conn));
}
header("Location:nhanvienlist.php");

 ?>