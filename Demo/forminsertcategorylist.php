
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form insert danh mục</title>
</head>
<body>
<form method="post" action="insertcategorylist.php">
	<table width="500" border="0">
		<tr > 
			<td colspan="2" align="center"><strong>Insert danh mục</strong></td>
		</tr> 
		
		<tr>
			<td width="126"> Tên danh mục</td>
			<td width="358">
				<input type="text" name="tendanhmuc" id="tendanhmuc" size = "40">
			</td>
		</tr>
		
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit"  value="Thêm">
				<?php echo '<a  href = "categorylist.php" class="btn btn-primary">Quay lại</a>'; ?>
				
			</td>
		</tr>
		
	</table>
</form>
</body>
</html>