<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
<style type="text/css">
#tong{
  width: 100%;
}
</style>
</head>
<body>
<?php 
require_once '../use/connect.php';
require_once '../use/head.php';
$tim_kiem = "";
if(isset($_GET['tim_kiem'])){
  $tim_kiem = $_GET['tim_kiem'];
}

$sql = "select * from san_pham where ten_san_pham like '%$tim_kiem%'";
$array_san_pham = mysqli_query($connect,$sql);

$dem_san_pham = mysqli_num_rows($array_san_pham);

$so_san_pham_tren_1_trang = 3;

$so_trang = ceil($dem_san_pham/$so_san_pham_tren_1_trang);

$trang = 1;
if(isset($_GET['trang'])){
  $trang = $_GET['trang'];
}

$bo_qua = $so_san_pham_tren_1_trang * ($trang - 1);

$sql .= "limit $so_san_pham_tren_1_trang offset $bo_qua";
$array_san_pham = mysqli_query($connect,$sql);
mysqli_close($connect);
?>
<div id="banner">
    <img src="../khach_hang/banner.jpg">
</div>
<div id="tong">
  <form>
    <center><input type="search" name="tim_kiem" value="<?php echo $tim_kiem ?>" placeholder="Tìm kiếm"></center>
    <br>
    <br>
  </form>
    <div class="list-product">
      <?php foreach ($array_san_pham as $san_pham): ?>
        <div class="san_pham">
            <div>
                <img class="img-product" src="../admin/quan_ly_san_pham/anh/<?php echo $san_pham['anh'] ?>">
            </div>
          <h2>
            <?php echo $san_pham['ten_san_pham'] ?>
          </h2>
          <h3>
            <?php echo $san_pham['gia'] ?> đ
          </h3>
          <p>
            <?php echo substr($san_pham['mo_ta'], 0,40)."..."; ?>
            <br>
            <a href="xem_chi_tiet.php?ma_san_pham=<?php echo $san_pham['ma_san_pham'] ?>">
              Xem thêm...
            </a>
          </p>
        </div>
      <?php endforeach ?>
    </div>
  <div class="pagination" align="center">
    <?php for($i=1;$i<=$so_trang;$i++){ ?>
      <a href="?trang=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>">
        <?php echo $i ?>
      </a>
    <?php } ?>
  </div>
</div>
<?php
require_once '../use/foot.php';
?>
</body>
</html>