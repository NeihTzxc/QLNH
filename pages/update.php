<?php 
require 'connect.php';
$mamon=1;
$tenmon='ga chien nuoc mam';
$madanhmuc=1;
$size='lon';
$gia=120000;

 $sql="update  monan set tenmon='$tenmon',size='$size',madanhmuc=$madanhmuc,gia=$gia where mamon=$mamon;";


if(!mysqli_query($conn,$sql))
{
die ('Loi sql'.mysql_error($conn));
}
echo "Sua thanh cong";
 ?>