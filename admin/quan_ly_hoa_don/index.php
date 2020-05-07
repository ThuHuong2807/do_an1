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
$sql = "select * from hoa_don
order by tinh_trang asc, thoi_gian_mua desc";
$array_hoa_don = mysqli_query($connect,$sql); 


$tim_kiem = "";
if(isset($_GET['tim_kiem'])){
	$tim_kiem = $_GET['tim_kiem'];
}
$sql = "select *
from hoa_don on hoa_don.ma_hoa_don = san_pham.ma_hoa_don
where hoa_don.ma_hoa_don like '%$tim_kiem%'";
$array = mysqli_query($connect,$sql);
// die($sql);
$so_luong_tat_ca_hoa_don = mysqli_num_rows($array_hoa_don);


$trang_hien_tai = 1;
if(isset($_GET['trang'])){
	$trang_hien_tai = $_GET['trang'];
}
$hoa_don_tren_1_trang = 3;

$so_trang = ceil($so_luong_tat_ca_hoa_don / $hoa_don_tren_1_trang);

$bo_qua =( $trang_hien_tai - 1) * $hoa_don_tren_1_trang;

$sql .= "limit $hoa_don_tren_1_trang offset $bo_qua";
$array = mysqli_query($connect,$sql);
?>
<br>
<br>
<br>
<table width="100%" border="1">
	<caption>
		<form>
			<input type="search" name="tim_kiem" value="<?php echo $tim_kiem ?>" placeholder="Tìm kiếm">
		</form>
<br>
<br>
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
			Xử lý
		</th>
	</tr>
	<?php foreach ($array_hoa_don as $hoa_don) : ?>
		<tr>
			<td>
				<?php 
				$date=date_create($hoa_don['thoi_gian_mua'] );
				echo date_format($date,"H:i:s d/m/Y");
				?>
			</td>
			<td>
				<?php echo $hoa_don['tong_tien'] ?> đ
			</td>
			<td>
				<?php echo $hoa_don['ten_nguoi_nhan'] ?>
				<br>
				SĐT: <?php echo $hoa_don['so_dien_thoai_nguoi_nhan'] ?>
				<br>
				Địa chỉ: <?php echo $hoa_don['dia_chi_nguoi_nhan'] ?>
			</td>
			<td>
				<?php 
					switch ($hoa_don['tinh_trang']) {
						case '1':
							echo "Đang chờ xử lý";
							break;
						case '2':
							echo "Đã xử lý";
							break;
						case '3':
							echo "Đã huỷ ";
							break;
					}
				?>
			</td>
			<td>
				<a href="view_hoa_don_chi_tiet.php?ma_hoa_don=<?php echo $hoa_don['ma_hoa_don'] ?>">
					Xem chi tiết
				</a>
			</td>
			<td>
				<?php if($hoa_don['tinh_trang']==1){ ?>
					<a href="process_tinh_trang_hoa_don.php?tinh_trang=1&ma_hoa_don=<?php echo $hoa_don['ma_hoa_don'] ?>">
						<button>
							Duyệt
						</button>
					</a>
					<a href="process_tinh_trang_hoa_don.php?tinh_trang=0&ma_hoa_don=<?php echo $hoa_don['ma_hoa_don'] ?>">
						<button>
							Huỷ
						</button>
					</a>
				<?php } ?>
			</td>
		</tr>
	<?php endforeach ?>
</table>
<div class="pagination" align="center">
	<?php for($i = 1; $i <= $so_trang; $i++){ ?>
		<a href="?trang=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem?>">
			<?php echo $i ?>
		</a>
	<?php } ?>
</div>

<?php 
require_once '../../use/disconnect.php';
?>

</body>
</html>