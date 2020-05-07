<?php 

$ten_khach_hang     = $_GET['ten_khach_hang'];
$gioi_tinh = $_GET['gioi_tinh'];
$so_dien_thoai      = $_GET['so_dien_thoai'];
$email    = $_GET['email'];
$mat_khau = $_GET['mat_khau'];
$dia_chi   = $_GET['dia_chi'];

require_once '../use/connect.php';

$sql = "select * from khach_hang where email = '$email'";
$array_khach_hang = mysqli_query($connect,$sql);

$kiem_tra = mysqli_num_rows($array_khach_hang);
if($kiem_tra>0){
	require_once '../use/disconnect.php';
	header('location:view_dang_ky_khach_hang.php?error=Đã có người dùng email này');
}


$sql = "insert into khach_hang(ten_khach_hang,gioi_tinh,so_dien_thoai,email,mat_khau,dia_chi)
values ('$ten_khach_hang', '$gioi_tinh', '$so_dien_thoai', '$email', '$mat_khau', '$dia_chi')";
mysqli_query($connect,$sql);

require_once '../use/disconnect.php';

header('location:index.php');


 
 