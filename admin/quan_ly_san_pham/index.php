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

$tim_kiem = "";
if(isset($_GET['tim_kiem'])){
	$tim_kiem = $_GET['tim_kiem'];
}
$sql = "select *
from san_pham join nha_san_xuat on nha_san_xuat.ma_nha_san_xuat = san_pham.ma_nha_san_xuat
where san_pham.ten_san_pham like '%$tim_kiem%'";
$array = mysqli_query($connect,$sql);
// die($sql);
$so_luong_tat_ca_san_pham = mysqli_num_rows($array);


$trang_hien_tai = 1;
if(isset($_GET['trang'])){
	$trang_hien_tai = $_GET['trang'];
}
$san_pham_tren_1_trang = 3;

$so_trang = ceil($so_luong_tat_ca_san_pham / $san_pham_tren_1_trang);

$bo_qua =( $trang_hien_tai - 1) * $san_pham_tren_1_trang;

$sql .= "limit $san_pham_tren_1_trang offset $bo_qua";
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
	</caption>
	<tr>
		<th>Tên sản phẩm</th>
		<th>Giá</th>
		<th>Ảnh</th>
		<th>Mô Tả</th>
		<th>Nhà Sản Xuất</th>
		<th>Sửa</th>
		<th>Xoá</th>
	</tr>
	<?php foreach ($array as $san_pham): ?>
		<tr>
			<td>
				<?php echo $san_pham['ten_san_pham'] ?>
			</td>
			<td class="price">
				<?php echo $san_pham['gia'] ?> đ
			</td>
			<td>
				<img height="200" src="../quan_ly_san_pham/anh/<?php echo $san_pham['anh'] ?>">
			</td>
			<td>
				<?php echo $san_pham['mo_ta'] ?>
			</td>
			<td>
				<?php echo $san_pham['ten_nha_san_xuat'] ?>
			</td>
			<td align="center">
				<a href="view_update_sp.php?ma_san_pham=<?php echo $san_pham['ma_san_pham'] ?>">
					Sửa
				</a>
			</td>
			<td align="center">
				<a href="delete_sp.php?ma_san_pham=<?php echo $san_pham['ma_san_pham'] ?>">
					Xoá
				</a>
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