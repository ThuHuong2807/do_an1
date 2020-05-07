<?php
require_once '../use/check_admin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Xem NSX</title>
	<meta charset="utf-8">
</head>
<body>
<?php require_once '../../use/menu.php'; ?>
<br>
<br>
<br>
<form action="process_insert_nsx.php" method="get">
<table>
	<tr>
		<td>Tên nhà sản xuất</td>
		<td><input type="text" name="ten_nha_san_xuat"></td>
	</tr>
</table>
	<center><button>Thêm</button><center>
</form>
</body>
</html>
