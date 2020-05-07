<?php 
require_once '../use/head.php';
require_once '../use/connect.php';
$ma_khach_hang = $_SESSION['ma_khach_hang'];
$sql = "select * from hoa_don where ma_khach_hang = '$ma_khach_hang'
order by tinh_trang asc, thoi_gian_mua desc";
$array = mysqli_query($connect,$sql); 
?>
<br>
<br>
<br>
<table width="100%" border="1">
	<tr>
		<th>
			Thời gian mua
		</th>
		<th>
			Tổng tiền
		</th>
		<th>
			Thông tin người nhận
		</th>
		<th>
			Tình trạng đơn
		</th>
		<th>
			Xem chi tiết
		</th>
		<th>
			Hủy
		</th>
	</tr>
	<?php foreach ($array as $each): ?>
		<tr>
			<td>
				<?php 
				$date=date_create($each['thoi_gian_mua'] );
				echo date_format($date,"H:i:s d/m/Y");
				?>
			</td>
			<td>
				<?php echo $each['tong_tien'] ?> đ
			</td>
			<td>
				<?php echo $each['ten_nguoi_nhan'] ?>
				<br>
				SĐT: <?php echo $each['so_dien_thoai_nguoi_nhan'] ?>
				<br>
				Địa chỉ: <?php echo $each['dia_chi_nguoi_nhan'] ?>
			</td>
			<td>
				<?php 
					switch ($each['tinh_trang']) {
						case '1':
							echo "Đang chờ xử lý";
							break;
						case '2':
							echo "Đã xử lý";
							break;
						case '3':
							echo "Đã huỷ";
							break;
					}
				?>
			</td>
			<td align="center">
				<a href="view_hoa_don_chi_tiet.php?ma_hoa_don=<?php echo $each['ma_hoa_don'] ?>">
					Xem chi tiết
				</a>
			</td>
			<td align="center">
				<a href="delete_hoa_don.php?ma_hoa_don=<?php echo $each['ma_hoa_don'] ?>">
					Hủy
				</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
<?php 
require_once '../use/disconnect.php';
?>
