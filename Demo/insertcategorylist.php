<?php 
require 'connect.php';

// $madanhmuc = mysqli_real_escape_string($conn, $_POST['madanhmuc']);
$tendanhmuc = mysqli_real_escape_string($conn, $_POST['tendanhmuc']);




$sql ="insert into danhmuc(tendanhmuc) values('$tendanhmuc');";


if(!mysqli_query($conn,$sql))
{
die ('Loi sql'.mysql_error($conn));
}
 // echo "Them thanh cong";
{
	echo 'Thêm thành công ';
	echo '<br>';
	echo '<a  href = "categorylist.php" class="btn btn-primary">Quay lại</a>';
}

 ?>
