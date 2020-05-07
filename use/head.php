<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../khach_hang/style.css">
  <meta charset="utf-8">
</head>
<body>
<div id="menu">
  <nav id="primary_nav_wrap">
    <ul>
      <li class="current-menu-item"><a href="../khach_hang">Trang chủ</a></li>
      <li><a href="#">Danh mục</a>
        <ul>
          <li><a href="#">Sách bán chạy</a></li>
          <li><a href="#">Sách giảm giá</a></li>
        </ul>
      </li>
    <li><a href="#">Hỗ trợ</a>
        <ul>
          <li><a href="#">Cá nhân</a></li>
          <li><a href="#">Doanh nghiệp</a></li>
        </ul>
        </li>
      <?php if(!isset($_SESSION['ma_khach_hang'])){ ?>
      <li><a href="view_dang_ky_khach_hang.php">Đăng kí</a> </li>
       <li><a href="view_dang_nhap_khach_hang.php">Đăng nhập</a> </li>
       <?php } else{ ?>
      <li><a href="logout_khach_hang.php">Đăng xuất</a> </li>
      <?php } ?>
    </ul>
  </nav>
</div>