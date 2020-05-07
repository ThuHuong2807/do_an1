<?php 
require_once '../use/check_super_admin';
$ma_admin     = $_GET['ma_admin'];

require_once '../../use/connect.php';

$sql = "delete from admin where ma_admin = '$ma_admin'";
mysqli_query($connect,$sql);

require_once '../../use/disconnect.php';

header('location:index.php');