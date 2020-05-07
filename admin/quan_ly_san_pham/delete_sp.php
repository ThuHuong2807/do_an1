<?php 

$ma_san_pham = $_GET['ma_san_pham'];

require_once '../../use/connect.php';
$sql = "delete from san_pham
where ma_san_pham = '$ma_san_pham'
";
mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php');