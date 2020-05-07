<?php 

$email = $_GET['email'];
$mat_khau = $_GET['mat_khau'];


$server = "localhost";
$user = "root";
$password = "";
$database = "do_an";

$connect = mysqli_connect($server,$user,$password,$database);
mysqli_set_charset($connect,'utf8');
$sql = "select * from admin where email = '$email' and mat_khau = '$mat_khau'";
$array = mysqli_query($connect,$sql);

$dem = mysqli_num_rows($array);
if($dem==1){
	$each = mysqli_fetch_array($array);

	session_start();
	$_SESSION['ma_admin'] = $each['ma_admin'];
	$_SESSION['ten_admin'] = $each['ten_admin'];
	$_SESSION['cap_do'] = $each['cap_do'];

header('location:quan_ly_hoa_don/index.php');
}
else{
 header('location:index.php?error=lỗi');
}
mysqli_close($connect);