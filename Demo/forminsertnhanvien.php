
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form insert nhân viên</title>
</head>
<body>
<form method="post" action="insertnhanvien.php">
	<table width="500" border="0">
		<tr > 
			<td colspan="2" align="center"><strong>Insert nhân viên</strong></td>
		</tr> 
		<tr>
			<td width="126"> Tên nhân viên</td>
			<td width="358">
				<input type="text" name="tennv" id="tennv" size = "40">
			</td>
		</tr>
		<tr>
			<td width="126"> Ngày sinh</td>
			<td width="358">
				<input type="text" name="ngaysinh" id="ngaysinh" size = "40">
			</td>
		</tr>
		<tr>
			<td width="126"> Địa chỉ</td>
			<td width="358">
				<input type="text" name="diachi" id="diachi" size = "40">
			</td>
		</tr>
		<tr>
			<td width="126"> Số điện thoại</td>
			<td width="358">
				<input type="text" name="sdt" id="sdt" size = "40">
			</td>
		</tr>
		<tr>
			<td width="126"> Vị trí</td>
			<td width="358">
				<input type="text" name="vitri" id="vitri" size = "40">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit"  value="Thêm">
				<?php echo '<a  href = "nhanvienlist.php" class="btn btn-primary">Quay lại</a>'; ?>
				
			</td>
		</tr>
		
	</table>
</form>
</body>
</html>