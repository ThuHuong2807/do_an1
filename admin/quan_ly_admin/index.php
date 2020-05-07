<?php
require_once '../use/check_super_admin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Xem Admin</title>
	<meta charset="utf-8">
</head>
<body>
<?php
require_once '../../use/connect.php';

$sql              = "select * from admin";
$array = mysqli_query($connect,$sql);
require_once '../../use/menu.php';
?>
<br>
<br>
<br>
<br>
<table width="100%" border="1">
	<tr>
		<th>Tên Admin</th>
		<th>SĐT</th>
		<th>Email</th>
		<th>Cấp Độ</th>
		<th>Sửa</th>
		<th>Xoá</th>
	</tr>

	<?php foreach ($array as $each): ?>
		<tr>
			<td>
				<?php echo $each['ten_admin'] ?>
			</td>
			<td>
				<?php echo $each['so_dien_thoai'] ?>
			</td>
			<td>
				<?php echo $each['email'] ?>
			</td>
			<td>
				<?php 
					echo ($each['cap_do']==0) ? "Admin" : "Super Admin"; 
				?>
			</td>
			<td align="center">
				<?php if($each['cap_do']==0) { ?>
				<a href="view_update_admin.php?ma_admin=<?php echo $each['ma_admin'] ?>">
					Sửa
				</a>
				<?php } ?>
			</td>
			<td align="center">
				<?php if($each['cap_do']==0) { ?>
				<a href="delete_admin.php?ma_admin=<?php echo $each['ma_admin'] ?>">
					Xoá
				</a>
			<?php } ?>
			</td>
		</tr>
	<?php endforeach ?>
</table>
 
<?php 
require_once '../../use/disconnect.php';
?>
</body>
</html>