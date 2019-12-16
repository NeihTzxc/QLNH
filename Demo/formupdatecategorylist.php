
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form update danh mục món ăn</title>
	<?php $madanhmuc=(int)$_GET['madanhmuc']; ?>
	
</head>
<body>
<form method="post" action="updatecategorylist.php">
	<table width="500" border="0">
		<tr > 
			<td colspan="2" align="center"><strong>Update danh mục món ăn</strong></td>
		</tr> 
		
		<tr>
			<td width="126"> Mã danh mục</td>
			<td width="358">
				<input type="text" name="madanhmuc" id="madanhmuc" size = "40">
			</td>
		</tr>
		<tr>
			<td width="126"> Tên danh mục</td>
			<td width="358">
				<input type="text" name="tendanhmuc" id="tendanhmuc" size = "40">
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit"  value="Update">
				<?php echo '<a  href = "categorylist.php" class="btn btn-primary">Quay lại</a>'; ?>
				
				
			</td>
		</tr>
		
	</table>
</form>
</body>
</html>