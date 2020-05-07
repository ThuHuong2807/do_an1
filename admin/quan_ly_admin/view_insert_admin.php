<?php
require_once '../use/check_super_admin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm admin</title>
	<meta charset="utf-8">
</head>
<body>
<?php require_once '../../use/menu.php'; ?>
<br>
<br>
<br>
<br>
	<form action="process_insert_admin.php" method="get">
	<table>
		<tr>
			<td>Tên Admin</td>
			<td><input type="text" name="ten_admin"></td>
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
			<td>Cấp độ</td>
			<td>
				<input type="radio" name="cap_do" value="0" checked>Admin
				<input type="radio" name="cap_do" value="1">Super Admin
			</td>
		</tr>
	</table>
	<center><button>Thêm</button><center>
</form>
</body>
</html>