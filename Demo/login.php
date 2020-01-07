<?php
session_start();
?>
<?php
	//G?i file connection.php ? bài tru?c
	require_once("Admin/connect.php");
	// Ki?m tra n?u ngu?i dùng dã ân nút dang nh?p thì m?i x? lý
	if (isset($_POST["btn_submit"])) {
		// l?y thông tin ngu?i dùng
		$manv = $_POST["manv"];
		$password = $_POST["password"];
		//làm s?ch thông tin, xóa b? các tag html, ký t? d?c bi?t 
		//mà ngu?i dùng c? tình thêm vào d? t?n công theo phuong th?c sql injection
		$manv = strip_tags($manv);
		$manv = addslashes($manv);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($manv == "" || $password =="") {
			echo "username ho?c password b?n không du?c d? tr?ng!";
		}else{
            
            // $sql="select * from user,nhanvien where MANV='$manv' and password='$password' ";
             $sql="select id,user.manv manv,password,ten,dchi,dthoai,loainv from user, nhanvien where user.manv=nhanvien.manv and user.manv='$manv' and password='$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên dang nh?p ho?c m?t kh?u không dúng !";
			}else{
                //ti?n hành luu tên dang nh?p vào session d? ti?n x? lý sau này
                $_SESSION['loainv']=$loainv;
				$_SESSION['manv'] = $manv;
                // Th?c thi hành d?ng sau khi luu thông tin vào session
                // ? dây mình ti?n hành chuy?n hu?ng trang web t?i m?t trang g?i là index.php
                header('Location: Admin/home.php');
			}
		}
	}
?>
<head>
<link rel="stylesheet" type="text/css" href="csslogin.css">
</head
<form action="Admin/home.php" method="post">
  <div class="imgcontainer">
    <img src="restaurant.jfif" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button  name="btn_submit" type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>