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
$ma_san_pham = $_GET['ma_san_pham'];

require_once '../../use/connect.php';

$sql = "select * from san_pham where ma_san_pham = '$ma_san_pham'";
$array_san_pham = mysqli_query($connect,$sql);
$san_pham = mysqli_fetch_array($array_san_pham);

$sql = "select * from nha_san_xuat";
$array_nha_san_xuat = mysqli_query($connect,$sql);

mysqli_close($connect);
?>
<br>
<br>
<br>
<br>
<form action="process_update_sp.php" method="post">
	<input type="hidden" name="ma_san_pham" value="<?php echo $ma_san_pham ?>">
<table>
	<tr>
		<td>Tên</td>
		<td><input type="text" name="ten_san_pham" value="<?php echo $san_pham['ten_san_pham'] ?>"></td>
	</tr>
	<tr>
		<td>Giá</td>
		<td><input type="text" name="gia" value="<?php echo $san_pham['gia'] ?>"></td>
	</tr>
	<tr>
		<td>Mô tả</td>
		<td><textarea name="mo_ta"><?php echo $san_pham['mo_ta'] ?></textarea></td>
	</tr>
	<tr>
		<td>Ảnh cũ</td>
		<td><input type="text" name="anh_cu" value="<?php echo $san_pham['anh'] ?>"> 
	<img height="200" src="../../use/anh/<?php echo $san_pham['anh'] ?>"></td>
	</tr>
	<tr>
		<td>Hoặc chọn ảnh mới</td>
		<td><input type="file" name="anh_moi"></td>
	</tr>
	<tr>
		<td>Nhà sản xuất</td>
		<td>
			<select name="ma_nha_san_xuat">
		<?php foreach ($array_nha_san_xuat as $nha_san_xuat): ?>
			<option value="<?php echo $nha_san_xuat['ma_nha_san_xuat']; ?>" 
				<?php if($san_pham['ma_nha_san_xuat']==$nha_san_xuat['ma_nha_san_xuat']) echo "selected"; ?>
			>
				<?php echo $nha_san_xuat['ten_nha_san_xuat']; ?>
			</option>
		<?php endforeach ?>
	</select>
		</td>
	</tr>
</table>
	<center><button>Sửa</button></center>
</form>
</body>
</html>