<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once '../use/check_admin.php';
require_once '../../use/menu.php'; 
?>
<?php 
require_once '../../use/connect.php';
$sql = "select * from nha_san_xuat";
$array_nha_san_xuat = mysqli_query($connect,$sql);
mysqli_close($connect);
?>
<br>
<br>
<br>
	<form action="process_insert_sp.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Tên</td>
			<td><input type="text" name="ten_san_pham"></td>
		</tr>
		<tr>
			<td>Giá</td>
			<td><input type="number" name="gia"></td>
		</tr>
		<tr>
			<td>Mô tả</td>
			<td><textarea name="mo_ta"></textarea></td>
		</tr>
		<tr>
			<td>Ảnh</td>
			<td><input type="file" name="anh" accept="image/*"></td>
		</tr>
		<tr>
			<td>Nhà sản xuất</td>
			<td>
				<select name="ma_nha_san_xuat">
			<?php foreach ($array_nha_san_xuat as $nha_san_xuat): ?>
				<option value="<?php echo $nha_san_xuat['ma_nha_san_xuat'] ?>">
					<?php echo $nha_san_xuat['ten_nha_san_xuat'] ?>
				</option>
			<?php endforeach ?>
		</select>
			</td>
		</tr>
	</table>
		<center><button>Thêm</button></center>
	</form>
</body>
</html>