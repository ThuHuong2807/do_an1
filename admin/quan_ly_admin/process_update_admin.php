<?php 
require_once '../use/check_super_admin.php';
$ma_admin       			 = $_GET['ma_admin'];
$ten_admin    				 = $_GET['ten_admin'];
$so_dien_thoai      		 = $_GET['so_dien_thoai'];
$email   					 = $_GET['email'];
$mat_khau					 = $_GET['mat_khau'];
$cap_do  					 = $_GET['cap_do'];

require_once '../../use/connect.php';

$sql = "update admin set
ten_admin = '$ten_admin',
so_dien_thoai = '$so_dien_thoai',
email = '$email',
mat_khau = '$mat_khau',
cap_do = '$cap_do'
where ma_admin = '$ma_admin'";
mysqli_query($connect,$sql);

require_once '../../use/disconnect.php';

 header('location:index.php');