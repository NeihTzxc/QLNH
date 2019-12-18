<?php 
require 'connect.php';
$tenmon = mysqli_real_escape_string($conn, $_POST['tenmon']);
$madanhmuc = mysqli_real_escape_string($conn, $_POST['madanhmuc']);
$size = mysqli_real_escape_string($conn, $_POST['size']);
$gia = mysqli_real_escape_string($conn, $_POST['gia']);

// $tenmon=$_POST['tenmon'];
// $madanhmuc=$_POST['madanhmuc'];
// $size=$_POST['size'];
// $gia=$_POST['gia'];

//$sql ="insert into monan(tenmon,madanhmuc,size,gia) values ('ga chien',1,'lon',200000);";
$sql ="insert into monan(tenmon,madanhmuc,size,gia) values ('$tenmon',$madanhmuc,'$size',$gia);";
// $sql="update  monan set tenmon='khoai tay' where mamon=1;";
// $sql ="delete from monan where mamon=1;";

if(!mysqli_query($conn,$sql))
{
die ('Loi sql'.mysql_error($conn));
}
 // echo "Them thanh cong";
{
	header("Location:foodlist.php");
}

 ?>
