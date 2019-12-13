
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form insert món ăn</title>
</head>
<body>
<form method="post" action="insert.php">
	<table width="500" border="0">
		<tr > 
			<td colspan="2" align="center"><strong>Insert món ăn</strong></td>
		</tr> 
		<tr>
			<td width="126"> Tên món</td>
			<td width="358">
				<input type="text" name="tenmon" id="tenmon" size = "40">
			</td>
		</tr>
		<tr>
			<td width="126"> Mã danh mục</td>
			<td width="358">
				<input type="text" name="madanhmuc" id="madanhmuc" size = "40">
			</td>
		</tr>
		<tr>
			<td width="126"> Size</td>
			<td width="358">
				<input type="text" name="size" id="size" size = "40">
			</td>
		</tr>
		<tr>
			<td width="126"> Giá</td>
			<td width="358">
				<input type="text" name="gia" id="gia" size = "40">
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