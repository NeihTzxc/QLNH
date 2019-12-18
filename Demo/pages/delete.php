<?php 
require 'connect.php';
// $tenmon='ga chien';
// $madanhmuc=1;
// $size='lon';
// $gia=20000;
$mamon=(int)$_GET['mamon'];


 $sql ="delete from monan where mamon=$mamon;";

if(!mysqli_query($conn,$sql))
{
die ('Loi sql'.mysql_error($conn));
}
header("Location:select.php");

 ?>