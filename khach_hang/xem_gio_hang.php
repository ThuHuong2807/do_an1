<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 

require_once '../use/head.php';
if(isset($_SESSION['gio_hang'])){
$array_gio_hang = $_SESSION['gio_hang'];
$tong_tien = 0;

$ma_khach_hang = $_SESSION['ma_khach_hang'];
require_once '../use/connect.php';

$sql = "select * from khach_hang where ma_khach_hang = '$ma_khach_hang'";
$array = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($array);
?>
<table width="100%" border="1">
	<tr>
		<th>
			Tên
		</th>
		<th>
			Ảnh
		</th>
		<th>
			Giá
		</th>
		<th>
			Số Lượng
		</th>
	</tr>
	<?php foreach ($array_gio_hang as $ma_san_pham => $san_pham): ?>
		<tr>
			<td>
				<?php echo $san_pham['ten_san_pham'] ?>
			</td>
			<td align="center">
				<img src="../admin/quan_ly_san_pham/anh/<?php echo $san_pham['anh'] ?>" width='200'>
			</td>
			<td align="center">
				<?php echo $san_pham['gia'] ?> đ
			</td>
			<td align="center">
				<?php echo $san_pham['so_luong'] ?>
			</td>
			<?php $tong_tien += $san_pham['gia'] * $san_pham['so_luong'] ?>
		</tr>
	<?php endforeach ?>
</table>
<h1 class="total-price" align="right">
	Tổng tiền là <?php echo $tong_tien ?> đ
</h1>
<form class="form-order" action="process_dat_hang.php">
	<table>
		<tr>
			<td>Tên người nhận:</td>
			<td>
				<input type="text" name="ten_nguoi_nhan" value="<?php  echo $each["ten_khach_hang"] ?>">
			</td>
		</tr>
		<tr>
			<td>SĐT người nhận:</td>
			<td>
				<input type="text" name="so_dien_thoai_nguoi_nhan" value="<?php  echo $each["so_dien_thoai"] ?>">
			</td>
		</tr>
		<tr>
			<td>Địa chỉ người nhận:</td>
			<td>
				<textarea name="dia_chi_nguoi_nhan"><?php  echo $each["dia_chi"] ?></textarea>
			</td>
		</tr>


	</table>
	<center><button>Đặt hàng</button></center>
</form>
<?php
}
else{
	echo "Bạn chưa thêm sản phẩm vào giỏ hàng";
}
require_once '../use/foot.php';
?>
</body>
</html>

