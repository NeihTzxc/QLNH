<?php 
require 'connect.php';
$tenmon='ga chien';
$madanhmuc=1;
$size='lon';
$gia=20000;
//$sql ="insert into monan(tenmon,madanhmuc,size,gia) values ('ga chien',1,'lon',200000);";
$sql ="insert into monan(tenmon,madanhmuc,size,gia) values ('$tenmon',$madanhmuc,'$size',$gia);";
// $sql="update  monan set tenmon='khoai tay' where mamon=1;";
// $sql ="delete from monan where mamon=1;";

if(!mysqli_query($conn,$sql))
{
die ('Loi sql'.mysql_error($conn));
}
echo "Them thanh cong";
 ?>
