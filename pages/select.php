<?php
require 'connect.php';
$sql="select mamon,tenmon,monan.madanhmuc, size,gia, danhmuc.tendanhmuc from monan,danhmuc;";

$result = mysqli_query($conn,$sql);
if(!$result)
{
	die ('Loi'.mysqli_error($conn));
}


?>
<html>
<head>
	<meta charset="utf-8">

</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<td>Ten  mon</td>
				<td>Ten danh muc</td>
				<td>Size</td>
				<td>Gia</td>
				<td>Delete</td>

			</tr>
		</thead>
		<tbody>
			<?php
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{?>
		<tr>
				<td><?php echo $row['tenmon'] ?></td>
				<td><?php echo $row['tendanhmuc'] ?></td>
				<td><?php echo $row['size'] ?></td>
				<td><?php echo $row['gia'] ?></td>
				<td> <a href="delete.php?mamon=<?php echo $row['mamon'];?>">Delete</a> </td>

			</tr>
			<?php

	}
}
			?>
			
		</tbody>
			
		
	</table>
</body>
</html>