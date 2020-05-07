<?php 
require_once '../use/check_admin.php';
$ma_nha_san_xuat       			 	 = $_GET['ma_nha_san_xuat'];
$ten_nha_san_xuat    				 = $_GET['ten_nha_san_xuat'];
require_once '../../use/connect.php';

$sql = "update nha_san_xuat set
ten_nha_san_xuat = '$ten_nha_san_xuat'
where ma_nha_san_xuat = '$ma_nha_san_xuat'";
mysqli_query($connect,$sql);

require_once '../../use/disconnect.php';

// chuyển hướng sau khi thành công
 header('location:index.php');