<?php 
require_once '../use/check_admin.php';
$ma_san_pham = $_POST['ma_san_pham'];
$ten_san_pham = $_POST['ten_san_pham'];
$gia = $_POST['gia'];
$mo_ta = $_POST['mo_ta'];
$ma_nha_san_xuat = $_POST['ma_nha_san_xuat'];

require_once '../../use/connect.php';
$sql = "update san_pham set
ten_san_pham = '$ten_san_pham',
gia = '$gia',
mo_ta = '$mo_ta',
ma_nha_san_xuat = '$ma_nha_san_xuat'
where ma_san_pham = '$ma_san_pham'
";
mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php');