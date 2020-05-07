<?php 
require_once '../use/check_admin.php';
$ma_khach_hang = $_GET['ma_khach_hang'];
$ho_ten        = $_GET['ho_ten'];
$gioi_tinh     = $_GET['gioi_tinh'];
$so_dien_thoai = $_GET['so_dien_thoai'];
$email         = $_GET['email'];
$mat_khau      = $_GET['mat_khau'];
$dia_chi 	   = $_GET['dia_chi'];

require_once '../../use/connect.php';

$sql = "update khach_hang
set 
ten_khach_hang = '$ho_ten',
gioi_tinh = '$gioi_tinh',
so_dien_thoai = '$so_dien_thoai',
email = '$email',
mat_khau = '$mat_khau',
dia_chi = '$dia_chi'
where ma_khach_hang = '$ma_khach_hang'";

require_once '../../use/disconnect.php';

 header('location:index.php');