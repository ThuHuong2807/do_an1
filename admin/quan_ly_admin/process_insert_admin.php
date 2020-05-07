<?php 

require_once '../use/check_super_admin.php';

$ten_admin     			= $_GET['ten_admin'];
$so_dien_thoai     		= $_GET['so_dien_thoai'];
$email   				= $_GET['email'];
$mat_khau				= $_GET['mat_khau'];
$cap_do   				= $_GET['cap_do'];

require_once '../../use/connect.php';

$sql = "insert into admin(ten_admin,so_dien_thoai,email,mat_khau,cap_do)
values ('$ten_admin','$so_dien_thoai','$email','$mat_khau','$cap_do')";
mysqli_query($connect,$sql);


require_once '../../use/disconnect.php';

// chuyển hướng sau khi thành công
 header('location:index.php');