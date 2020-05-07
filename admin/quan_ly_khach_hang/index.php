<!DOCTYPE html>
<html>
<head>
	<title>xem khách hàng</title>
	<meta charset="utf-8">
</head>
<body>
<?php
require_once '../use/check_admin.php';
require_once '../../use/connect.php';
require_once '../../use/menu.php';
$sql              = "select * from khach_hang";
$array_khach_hang = mysqli_query($connect,$sql);
?>
<br>
<br>
<br>
<br>
<table width="100%" border="1">
	<tr>
		<th>
			Số Thứ Tự
		</th>
		<th>
			Mã Khách Hàng
		</th>
		<th>
			Tên Khách Hàng
		</th>
		<th>
			Giới Tính
		</th>
		<th>
			Số điện thoại
		</th>
		<th>
			Email
		</th>
		<th>
			Địa chỉ
		</th>
		<th>
			Sửa
		</th>
		<th>
			Xoá
		</th>
	</tr>
	<?php $i=0;
	foreach($array_khach_hang as $khach_hang){ ?>
		<tr>
			<td>
				<?php echo ++$i ?>
			</td>
			<td>
				<?php echo $khach_hang['ma_khach_hang'] ?>
			</td>
			<td>
				<?php echo $khach_hang['ten_khach_hang'] ?>
			</td>
			<td>
				<?php echo $khach_hang['so_dien_thoai'] ?>
			</td>
			<td>
				<?php 
					if($khach_hang['gioi_tinh']==1){
						echo "Nam";
					}
					else{
						echo "Nữ";
					}
				?>
			</td>
			<td>
				<?php echo $khach_hang['email'] ?>
			</td>
			<td>
				<?php echo $khach_hang['dia_chi'] ?>
			</td>
			<td align="center">
				<a href="view_update_khach_hang.php?ma_khach_hang=<?php echo $khach_hang['ma_khach_hang'] ?>">
					Sửa
				</a>
			</td>
			<td align="center">
				<a href="delete_khach_hang.php?ma_khach_hang=<?php echo $khach_hang['ma_khach_hang'] ?>">
					Xóa
				</a>
			</td>
		</tr>
	<?php } ?>
</table>
</body>
</html>