<?php 
require_once '../use/check_admin.php';
$ten_nha_san_xuat     = $_GET['ten_nha_san_xuat'];

require_once '../../use/connect.php';

$sql = "insert into nha_san_xuat(ten_nha_san_xuat)
values ('$ten_nha_san_xuat')";
mysqli_query($connect,$sql);

require_once '../../use/disconnect.php';


 header('location:index.php');