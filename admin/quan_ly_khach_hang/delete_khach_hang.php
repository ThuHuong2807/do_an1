<?php 
$ma_khach_hang = $_GET['ma_khach_hang'];

require_once '../../use/connect.php';

$sql = "delete from khach_hang
where ma_khach_hang = '$ma_khach_hang'";
mysqli_query($connect,$sql);

require_once '../../use/disconnect.php';

header('location:index.php');