<?php 
require 'connect.php';
// $mamon=1;
// $tenmon='ga chien nuoc mam';
// $madanhmuc=1;
// $size='lon';
// $gia=120000;
// $mamon=(int)$_GET['mamon'];
$mamon = mysqli_real_escape_string($conn, $_POST['mamon']);
// $mamon = mysqli_real_escape_string($conn, $_GET['mamon']);
$tenmon = mysqli_real_escape_string($conn, $_POST['tenmon']);
$madanhmuc = mysqli_real_escape_string($conn, $_POST['madanhmuc']);
$size = mysqli_real_escape_string($conn, $_POST['size']);
$gia = mysqli_real_escape_string($conn, $_POST['gia']);

 $sql="update  monan set tenmon='$tenmon',size='$size',madanhmuc=$madanhmuc,gia=$gia where mamon=$mamon;";


if(!mysqli_query($conn,$sql))
{
die ('Loi sql'.mysql_error($conn));
}
header("Location:foodlist.php");
// echo '<a  href = "foodlist.php" class="btn btn-primary">Quay lại</a>';
 ?>