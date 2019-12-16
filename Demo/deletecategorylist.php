<?php 
require 'connect.php';
// $tenmon='ga chien';
// $madanhmuc=1;
// $size='lon';
// $gia=20000;
$mamon=(int)$_GET['madanhmuc'];


 $sql ="delete from danhmuc where madanhmuc=$madanhmuc;";

if(!mysqli_query($conn,$sql))
{
die ('Loi sql'.mysql_error($conn));
}
header("Location:categorylist.php");

 ?>