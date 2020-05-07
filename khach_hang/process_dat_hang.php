<?php 

session_start();

$ten_nguoi_nhan     = $_GET['ten_nguoi_nhan'];
$so_dien_thoai_nguoi_nhan     = $_GET['so_dien_thoai_nguoi_nhan'];
$dia_chi_nguoi_nhan = $_GET['dia_chi_nguoi_nhan'];

$gio_hang = $_SESSION['gio_hang'];

$tong_tien = 0;
foreach ($gio_hang as $san_pham) {
	$tong_tien += $san_pham['so_luong'] * $san_pham['gia'];
}

require_once '../use/connect.php';
$ma_khach_hang = $_SESSION['ma_khach_hang'];
$tinh_trang    = 1; //chưa xử lý
$thoi_gian_mua = date('Y-m-d H:i:s');
// die($thoi_gian_mua);

$sql = "insert into hoa_don(ma_khach_hang,tinh_trang,tong_tien,thoi_gian_mua,ten_nguoi_nhan,so_dien_thoai_nguoi_nhan,dia_chi_nguoi_nhan)
values ('$ma_khach_hang','$tinh_trang','$tong_tien','$thoi_gian_mua','$ten_nguoi_nhan','$so_dien_thoai_nguoi_nhan','$dia_chi_nguoi_nhan')
";
mysqli_query($connect,$sql);

$sql = "select max(ma_hoa_don) from hoa_don";
$array = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($array);
$max_ma_hoa_don = $each['max(ma_hoa_don)'];

foreach ($gio_hang as $ma_san_pham => $san_pham) {
	$so_luong = $san_pham['so_luong'];
	$gia      = $san_pham['gia'];
	$sql = "insert into hoa_don_chi_tiet(ma_hoa_don,ma_san_pham,gia,so_luong)
	values ('$max_ma_hoa_don','$ma_san_pham','$gia','$so_luong')";
	mysqli_query($connect,$sql);
}
require_once '../use/disconnect.php';
unset($_SESSION['gio_hang']);
header('location:view_hoa_don.php');