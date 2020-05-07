<?php 

$ma_nha_san_xuat      = $_GET['ma_nha_san_xuat'];

require_once '../../use/connect.php';

$sql = "delete from nha_san_xuat where ma_nha_san_xuat = '$ma_nha_san_xuat'";
mysqli_query($connect,$sql);

require_once '../../use/disconnect.php';

header('location:index.php');