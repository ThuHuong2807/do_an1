<?php
require_once '../use/check_admin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sửa NSX</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once '../../use/menu.php';
require_once '../../use/connect.php';
$ma_nha_san_xuat = $_GET['ma_nha_san_xuat'];

$sql = "select * from nha_san_xuat where ma_nha_san_xuat = '$ma_nha_san_xuat'";
$array = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($array);
?>
<br>
<br>
<br>
<br>
<form action="process_update_nsx.php" method="get">
	<input type="hidden" name="ma_nha_san_xuat" value="<?php echo $each['ma_nha_san_xuat'] ?>">
<table>
	<tr>
		<td>Tên NSX</td>
		<td><input type="text" name="ten_nha_san_xuat" value="<?php echo $each['ten_nha_san_xuat'] ?>"></td>
	</tr>
</table>
<center><button>Sửa</button></center>
</form>
<?php 
require_once '../../use/disconnect.php';
?>
</body>
</html>
