<?php
require_once '../use/check_admin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sửa Admin</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once '../../use/menu.php';
require_once '../../use/connect.php';
$ma_admin = $_GET['ma_admin'];

$sql = "select * from admin where ma_admin = '$ma_admin'";
$array = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($array);
?>
<br>
<br>
<br>
<br>
<form action="process_update_admin.php" method="get">
<input type="hidden" name="ma_admin" value="<?php echo $each['ma_admin'] ?>">
<table>
	<tr>
		<td>Tên Admin</td>
		<td><input type="text" name="ten_admin" value="<?php echo $each['ten_admin'] ?>"></td>
	</tr>
	<tr>
		<td>SĐT</td>
		<td><input type="text" name="so_dien_thoai" value="<?php echo $each['so_dien_thoai'] ?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email" value="<?php echo $each['email'] ?>"></td>
	</tr>
	<tr>
		<td>Mật khẩu</td>
		<td><input type="password" name="mat_khau" value="<?php echo $each['mat_khau'] ?>"></td>
	</tr>
	<tr>
		<td>Cấp độ</td>
		<td>
			<input type="radio" name="cap_do" value="0" <?php if($each['cap_do']==0) echo "checked"; ?>>Admin
			<input type="radio" name="cap_do" value="1" <?php if($each['cap_do']==1) echo "checked"; ?>>Super admin </td>
	</tr>
</table>
		<center><button>Sửa</button></center>
<?php 
require_once '../../use/disconnect.php';
?>
</body>
</html>
