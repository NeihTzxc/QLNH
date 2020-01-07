
<!-- <?php echo '<a  href = "nhanvienlist.php" class="btn btn-primary">Quay lại</a>'; ?> -->
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Phần mềm quản lý Nhà Hàng</title>
	
	<link rel="shortcut icon" href="logoc.jpg">

	<!-- Bootstrap Core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Morris Charts CSS -->
	<link href="../vendor/morrisjs/morris.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


	<link href="../css/bootstrap-datepicker.min.css" rel="stylesheet">

	<link href="../js/datepicker.js" rel="stylesheet">

	<link href="../js/bootstrap-datepicker.min.js" rel="stylesheet">

	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="src/facebox.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('a[rel*=facebox]').facebox({
				loadingImage : 'src/loading.gif',
				closeImage   : 'src/closelabel.png'
			})
		})
	</script>


</head>

<body>

	<div id="wrapper">

		<?php include('navfixed.php');?>


		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
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
			<td with="358">
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
				</div>

				<!-- /.col-lg-12 -->
			</div>

				
	

				
					
			
		
</div>


<!-- /.row -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>


<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<script>
	$('.carousel').carousel({
        interval: 3000 //changes the speed
    })
</script>

</body>

</html>

