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
<br>
<br>
<br>
<br>
<form action="process_insert_khach_hang.php">
<table>
	<tr>
		<td>Họ tên</td>
		<td><input type="text" name="ho_ten"></td>
	</tr>
	<tr>
		<td>Giới tính</td>
		<td>
			<label><input checked type="radio" name="gioi_tinh" value="1">Nam</label>
			<label><input type="radio" name="gioi_tinh" value="0">Nữ</label>
		</td>
	</tr>
	<tr>
		<td>SĐT</td>
		<td><input type="text" name="so_dien_thoai"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td>Mật khẩu</td>
		<td><input type="password" name="mat_khau"></td>
	</tr>
	<tr>
		<td>Địa chỉ</td>
		<td><textarea name="dia_chi"></textarea></td>
	</tr>
</table>
	<center><button>Thêm</button><center>
</form>
</body>
</html>