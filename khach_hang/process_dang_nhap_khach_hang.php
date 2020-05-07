<?php 

$email = $_GET['email'];
$mat_khau = $_GET['mat_khau'];


$server = "localhost";
$user = "root";
$password = "";
$database = "do_an";

$connect = mysqli_connect($server,$user,$password,$database);
mysqli_set_charset($connect,'utf8');
$sql = "select * from khach_hang where email = '$email' and mat_khau = '$mat_khau'";
$array = mysqli_query($connect,$sql);

$dem = mysqli_num_rows($array);
if($dem==1){
	$each = mysqli_fetch_array($array);

	mysqli_close($connect);
	session_start();
	$_SESSION['ma_khach_hang'] = $each['ma_khach_hang'];
	$_SESSION['ten_khach_hang'] = $each['ten_khach_hang'];

	header('location:index.php');
}
else{
	mysqli_close($connect);
 	header('location:view_dang_nhap_khach_hang.php?error=lỗi');
}