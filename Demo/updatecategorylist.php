<?php 
require 'connect.php';


$madanhmuc = mysqli_real_escape_string($conn, $_POST['madanhmuc']);
$tendanhmuc = mysqli_real_escape_string($conn, $_POST['tendanhmuc']);


 $sql="update danhmuc set madanhmuc=$madanhmuc,tendanhmuc='$tendanhmuc' where madanhmuc=$madanhmuc;";


if(!mysqli_query($conn,$sql))
{
die ('Loi sql'.mysql_error($conn));
}
header("Location:categorylist.php");

 ?>