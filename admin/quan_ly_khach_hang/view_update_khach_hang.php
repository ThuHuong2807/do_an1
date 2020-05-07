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
require_once '../../use/connect.php';

$ma_khach_hang = $_GET['ma_khach_hang'];


$sql = "select * from khach_hang
where ma_khach_hang = '$ma_khach_hang'";

$array_khach_hang = mysqli_query($connect,$sql);
$khach_hang = mysqli_fetch_array($array_khach_hang);
?>
<br>
<br>
<br>
<br>
<form action="process_update_khach_hang.php">
	<input type="hidden" name="ma_khach_hang" value="<?php echo $ma_khach_hang ?>">
<table>
	<tr>
		<td>Họ tên</td>
		<td><input type="text" name="ho_ten" value="<?php echo $khach_hang['ten_khach_hang'] ?>"></td>
	</tr>
	<tr>
		<td>Giới tính</td>
		<td>
			<label><input
		<?php 
		if($khach_hang['gioi_tinh']==1) echo "checked";
		?>
	type="radio" name="gioi_tinh" value="1">Nam</label>
	<label><input
		<?php 
		if($khach_hang['gioi_tinh']==0) echo "checked";
		?>
	type="radio" name="gioi_tinh" value="0">Nữ</label>
		</td>
	</tr>
	<tr>
		<td>SĐT</td>
		<td><input type="text" name="so_dien_thoai" value="<?php echo $khach_hang['so_dien_thoai'] ?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email" value="<?php echo $khach_hang['email'] ?>"></td>
	</tr>
	<tr>
		<td>Mật khẩu</td>
		<td><input type="password" name="mat_khau" value="<?php echo $khach_hang['mat_khau'] ?>"></td>
	</tr>
	<tr>
		<td>Địa chỉ</td>
		<td><textarea name="dia_chi"><?php echo $khach_hang['dia_chi'] ?></textarea></td>
	</tr>
</table>
	<center><button>Sửa</button></center>
</form>
<?php 
require_once '../../use/disconnect.php';
?>
</body>
</html>