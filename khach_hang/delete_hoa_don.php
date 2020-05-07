<?php 

$ma_hoa_don = $_GET['ma_hoa_don'];

require_once '../use/connect.php';
$sql = "delete from hoa_don_chi_tiet
where ma_hoa_don = '$ma_hoa_don'
";
mysqli_query($connect,$sql);
$sql = "delete from hoa_don
where ma_hoa_don = '$ma_hoa_don'
";
mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:view_hoa_don.php');