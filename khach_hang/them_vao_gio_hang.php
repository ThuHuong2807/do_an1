<?php 
session_start();

$ma_san_pham = $_GET['ma_san_pham'];

if(isset($_SESSION['gio_hang'])){

	if(isset($_SESSION['gio_hang'][$ma_san_pham])){
		$_SESSION['gio_hang'][$ma_san_pham]['so_luong']++;
	}
	else{
		require_once '../use/connect.php';
		$sql = "select * from san_pham where ma_san_pham = '$ma_san_pham'";
		$array = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($array);

		$_SESSION['gio_hang'][$ma_san_pham]['so_luong'] = 1;
		$_SESSION['gio_hang'][$ma_san_pham]['gia']      = $each['gia'];
		$_SESSION['gio_hang'][$ma_san_pham]['ten_san_pham'] = $each['ten_san_pham'];
		$_SESSION['gio_hang'][$ma_san_pham]['anh']      = $each['anh'];
	}
}
else{
	require_once '../use/connect.php';
	$sql = "select * from san_pham where ma_san_pham = '$ma_san_pham'";
	$array = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($array);

	$_SESSION['gio_hang'][$ma_san_pham]['so_luong'] 	= 1;
	$_SESSION['gio_hang'][$ma_san_pham]['gia']      = $each['gia'];
	$_SESSION['gio_hang'][$ma_san_pham]['ten_san_pham']      = $each['ten_san_pham'];
	$_SESSION['gio_hang'][$ma_san_pham]['anh']      = $each['anh'];
}
header('location:xem_gio_hang.php'); 