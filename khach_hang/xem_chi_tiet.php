<!DOCTYPE html>
<html>
<head>
	<title>Xem chi tiết sản phẩm</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

require_once '../use/connect.php';
require_once '../use/head.php';

$ma_san_pham = $_GET['ma_san_pham'];

$sql = "select 
san_pham.*,
nha_san_xuat.ten_nha_san_xuat as ten_nha_san_xuat
from san_pham
join nha_san_xuat on nha_san_xuat.ma_nha_san_xuat = san_pham.ma_nha_san_xuat
where san_pham.ma_san_pham = '$ma_san_pham'";

$array = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($array);
?>
<div id="div_tong">
	<div id="div_trai">
		<img src="../admin/quan_ly_san_pham/anh/<?php echo $each['anh'] ?>">
	</div>
	<div id="div_phai">
		<h1>
			<?php echo $each['ten_san_pham'] ?>
		</h1>
		<h3>
			Giá: <?php echo $each['gia'] ?> đ
		</h3>
		<p>
			Nhà sản xuất: <?php echo $each['ten_nha_san_xuat']; ?>
			<br>
			<br>
			Mô tả: <?php echo $each['mo_ta']; ?>
			<br>
			<br>
			<a href="them_vao_gio_hang.php?ma_san_pham=<?php echo $each['ma_san_pham'] ?>">
				Thêm vào giỏ hàng
			</a>
			<a href="xem_gio_hang.php">
				Xem giỏ hàng
			</a>
		</p>
	</div>
</div>
<?php
require_once '../use/foot.php';
?>
</body>
</html>
