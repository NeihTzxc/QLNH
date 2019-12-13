
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>

<!-- Navigation -->
<head>
  <title>PHẦN MỀM QUẢN LÝ NHÀ HÀNG</title>
</head>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a >PHẦN MỀM QUẢN LÝ NHÀ HÀNG</a>
		<a class="navbar-brand" href="home.php">Trang chủ</a>
	</div>
	<!-- /.navbar-header -->

	<ul class="nav navbar-top-links navbar-right"> 
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-user">
				<li><a  href="#myModal" data-toggle="modal"><i class="fa fa-user fa-fw"></i> Thêm tài khoản</a>
					<li><a href="Logout.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
					</li>
				</ul>
				<!-- /.dropdown-user -->
			</li>
			<!-- /.dropdown -->
		</ul>
		<!-- /.navbar-top-links -->



		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					<li>
						<a href="home.php"><i class="fa fa-home fa-fw"></i> Trang chủ</a>
					</li>
					
					
					<li>
						<a href="foodlist.php"><i class="fa fa-table fa-fw"></i> Danh sách món ăn</a>
					</li>
					<li>
						<a href="nhanvienlist.php"><i class="fa fa-user fa-fw"></i> Danh sách nhân viên</a>
					</li>
					<li>
						<a href="#2"><i class="fa fa-list-alt fa-fw"></i> Hóa đơn</a>
					</li>
					<li>
						<a href="#3"><i class="fa fa-list-alt fa-fw"></i> Oder</a>
					</li>
					<li>
						<a href="#4"><i class="fa fa-truck fa-fw"></i> Giao hàng</a>
					</li>

					<li>
						<a rel="facebox" href="#5"><i class="fa fa-book fa-fw"></i> Thống kê</a>
					</li>
					<li>
						<a href="#6"><i class="fa fa-files-o fa-fw"></i> Báo cáo<span class="fa arrow"></span></a>
						
					</li>

					<li>
						<a href="#7"><i class="fa fa-bar-chart-o fa-fw"></i> Biểu đồ<span class="fa arrow"></span></a>
						
					</li>

				</div>
			</div>
			<!-- /.navbar-static-side -->
		</nav>

		