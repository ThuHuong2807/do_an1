<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once '../use/head.php';
require_once '../use/connect.php';
$ma_hoa_don = $_GET['ma_hoa_don'];
$sql = "select 
hoa_don_chi_tiet.*,
san_pham.anh,san_pham.ten_san_pham
from hoa_don_chi_tiet 
join san_pham on san_pham.ma_san_pham = hoa_don_chi_tiet.ma_san_pham
where ma_hoa_don = '$ma_hoa_don'";
$array = mysqli_query($connect,$sql); 
?>
<br>
<br>
<table width="100%" border="1">
	<tr>
		<th>
			Sản phẩm
		</th>
		<th>
			Giá
		</th>
		<th>
			Số lượng
		</th>
	</tr>
	<?php foreach ($array as $each): ?>
		<tr>
			<td>
				<?php echo $each['ten_san_pham'] ?>
				<img src="../admin/quan_ly_san_pham/anh/<?php echo $each['anh'] ?>" height='100'>
			</td>
			<td>
				<?php echo $each['gia'] ?> đ
			</td>
			<td>
				<?php echo $each['so_luong'] ?>
			</td>
		</tr>
	<?php endforeach ?>
</table>

<?php 
require_once '../use/disconnect.php';
?>
</body>
</html>