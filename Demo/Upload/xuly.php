<?php
include 'connect.php';
if (isset($_POST['upload'])) {
$errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
        
      $expensions= array("jpeg","jpg","png");
        
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
      }
        
      if($file_size > 2097152) {
         $errors[]='Kích thước file không được lớn hơn 2MB';
      }
$image = $_FILES['image']['name'];
$target = "photo/".basename($image);
$sql = "INSERT INTO images (image) VALUES ('$image')";
mysqli_query($conn, $sql);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target) && empty($errors)==true) {
        echo '<script language="javascript">alert("Đã upload thành công!");</script>';
}else{
        echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
}
}
$result = mysqli_query($conn, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="content">
<button type="button" onclick="quay_lai_trang_truoc()">Quay lại trang Upload</button>
  
<script>
function quay_lai_trang_truoc(){
history.back();
}
</script>
<?php
while ($row = mysqli_fetch_array($result)) {
echo "<div id='img_div'>";
echo "<img src='photo/".$row['image']."' >";
echo "</div>";
}
?>
</div> 
</body> 
</html>