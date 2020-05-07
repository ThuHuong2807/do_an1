<?php 
require_once '../use/check_admin.php';
$ten_san_pham    = $_POST['ten_san_pham'];
$gia             = $_POST['gia'];
$mo_ta           = $_POST['mo_ta'];
$anh             = $_FILES['anh'];
$ma_nha_san_xuat = $_POST['ma_nha_san_xuat'];

$ten_anh = $anh['name'];

$target_dir = "anh/";
$target_file = $target_dir . basename($anh["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($anh["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    $uploadOk = 0;
}
if ($anh["size"] > 500000) {
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
}
if ($uploadOk == 0) {
} else {
    if (move_uploaded_file($anh["tmp_name"], $target_file)) {
    } else {
    }
}

require_once '../../use/connect.php';

$sql = "insert into san_pham(ten_san_pham,gia,mo_ta,anh,ma_nha_san_xuat)
values ('$ten_san_pham','$gia','$mo_ta','$ten_anh','$ma_nha_san_xuat')";
mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php');