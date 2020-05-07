<?php 
require_once '../use/check_admin.php';
$ho_ten    		= $_GET['ho_ten'];
$gioi_tinh 		= $_GET['gioi_tinh'];
$so_dien_thoai  = $_GET['so_dien_thoai'];
$email    		= $_GET['email'];
$mat_khau  		= $_GET['mat_khau'];
$dia_chi		= $_GET['dia_chi'];

require_once '../../use/connect.php';

$sql = "insert into khach_hang(ten_khach_hang,gioi_tinh,so_dien_thoai,email,mat_khau,dia_chi)
values('$ho_ten','$gioi_tinh','$so_dien_thoai','$email','$mat_khau','$dia_chi')";
mysqli_query($connect,$sql);

require_once '../../use/disconnect.php';
header('location:index.php');