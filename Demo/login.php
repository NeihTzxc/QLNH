<?php
session_start();
?>
<?php
	//G?i file connection.php ? b�i tru?c
	require_once("Admin/connect.php");
	// Ki?m tra n?u ngu?i d�ng d� �n n�t dang nh?p th� m?i x? l�
	if (isset($_POST["btn_submit"])) {
		// l?y th�ng tin ngu?i d�ng
		$manv = $_POST["manv"];
		$password = $_POST["password"];
		//l�m s?ch th�ng tin, x�a b? c�c tag html, k� t? d?c bi?t 
		//m� ngu?i d�ng c? t�nh th�m v�o d? t?n c�ng theo phuong th?c sql injection
		$manv = strip_tags($manv);
		$manv = addslashes($manv);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($manv == "" || $password =="") {
			echo "username ho?c password b?n kh�ng du?c d? tr?ng!";
		}else{
            
            // $sql="select * from user,nhanvien where MANV='$manv' and password='$password' ";
             $sql="select id,user.manv manv,password,ten,dchi,dthoai,loainv from user, nhanvien where user.manv=nhanvien.manv and user.manv='$manv' and password='$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "t�n dang nh?p ho?c m?t kh?u kh�ng d�ng !";
			}else{
                //ti?n h�nh luu t�n dang nh?p v�o session d? ti?n x? l� sau n�y
                $_SESSION['loainv']=$loainv;
				$_SESSION['manv'] = $manv;
                // Th?c thi h�nh d?ng sau khi luu th�ng tin v�o session
                // ? d�y m�nh ti?n h�nh chuy?n hu?ng trang web t?i m?t trang g?i l� index.php
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