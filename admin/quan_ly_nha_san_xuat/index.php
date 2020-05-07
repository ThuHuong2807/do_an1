<?php
require_once '../use/check_super_admin.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Xem NSX</title>
	<meta charset="utf-8">
</head>
<body>
<?php

require_once '../../use/connect.php';
require_once '../../use/menu.php';
$sql              = "select * from nha_san_xuat";
$array = mysqli_query($connect,$sql);

?>
<br>
<br>
<br>
<br>
<table width="100%" border="1">
	<tr>
		<th>Tên NSX</th>
		<th>Sửa</th>
		<th>Xoá</th>
	</tr>

	<?php foreach ($array as $each): ?>
		<tr>
			<td>
				<?php echo $each['ten_nha_san_xuat'] ?>
			</td>
			<td align="center">
				<a href="view_update_nsx.php?ma_nha_san_xuat=<?php echo $each['ma_nha_san_xuat'] ?>">
					Sửa
				</a>
			</td>
			<td align="center">
				<a href="delete_nsx.php?ma_nha_san_xuat=<?php echo $each['ma_nha_san_xuat'] ?>">
					Xoá
				</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
 
<?php 
require_once '../../use/disconnect.php';
?>
</body>
</html>
