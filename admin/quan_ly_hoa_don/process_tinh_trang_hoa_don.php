<?php 
require_once '../use/check_admin.php';
require_once '../../use/connect.php';

$ma_hoa_don        = $_GET['ma_hoa_don'];
$tinh_trang = $_GET['tinh_trang'];
if($tinh_trang==1){
	$tinh_trang_duyet = 2; 
}
else{
	$tinh_trang_duyet = 3;
}

$sql = "update hoa_don set tinh_trang = '$tinh_trang_duyet' where ma_hoa_don = '$ma_hoa_don' and tinh_trang = 1";
mysqli_query($connect,$sql);
require_once '../../use/disconnect.php';
header('location:index.php');