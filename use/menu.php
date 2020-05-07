<style type="text/css">
body {
    margin: 0;
}

#primary_nav_wrap
{
    position: sticky;
    top: 0;
    width: 100%;
    background: #66CCFF;
}

#primary_nav_wrap ul
{
    list-style: none;
    margin: 0;
    position: relative;
}

#primary_nav_wrap ul a
{
  display:block;
  color:#333;
  text-decoration:none;
  font-weight:700;
  font-size:12px;
  line-height:32px;
  padding:0 15px;
  font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif; 
}
#primary_nav_wrap ul a:hover
{
    color: #fff;
}

#primary_nav_wrap ul li
{
    display: inline-block;
    position: relative;
}

#primary_nav_wrap ul li.current-menu-item
{
  background:#66CCFF;
}

#primary_nav_wrap ul li:hover
{
  background:#66CCFF
}

#primary_nav_wrap ul ul
{
  display:none;
  position:absolute;
  top:100%;
  left:0;
  background:#66CCFF;
  padding:0;
    border-radius: 0 0 8px 8px;
    overflow: hidden;
}

#primary_nav_wrap ul ul li
{
  float:none;
  min-width:200px;
    display: block;
    border-top: 1px solid #fff;
}

#primary_nav_wrap ul ul a
{
  line-height:120%;
  padding:10px 15px
}

#primary_nav_wrap ul ul ul
{
  top:0;
  left:100%
}

#primary_nav_wrap ul li:hover > ul
{
  display:block
}

input[type=search] {
    height: 40px;
    line-height: 40px;
    border-radius: 10px;
    border: none;
    background: #f0f0f0;
    text-indent: 10px;
    min-width: 420px;
}
input[type=search]::placeholder {
    color: #c1c1c1;
    font-size: 16px;
}
table {
    max-width: 1240px;
    margin: 0 auto;
    border: 1px gray;
    border-collapse: collapse;
    margin-top: 16px;
}
table tr:nth-child(odd) {
    background-color: #ffffff;
}
table tr:nth-child(even) {
    background-color: #F1F1F1;
}
table th, table td {
    min-width: 120px;
    padding: 10px;
}

.pagination {
    margin: 32px auto;
}
.pagination a {
    display: inline-block;
    margin-right: 8px;
}
.pagination a:last-child {
    margin-right: 0;
}
</style>
<nav id="primary_nav_wrap">
<ul>
  <li><a href="">Home</a></li>
  <?php if($_SESSION['cap_do']==1) { ?>
  <li><a href="../quan_ly_admin/index.php">Quản lý admin</a>
    <ul>
      <li><a href="../quan_ly_admin/index.php">Xem Admin</a></li>
      <li><a href="../quan_ly_admin/view_insert_admin.php">Thêm Admin</a></li>
    </ul>
  </li>
  <?php } ?>
  <?php if($_SESSION['cap_do']==1) { ?>
  <li><a href="../quan_ly_nha_san_xuat/index.php">Quản lý nhà sản xuất</a>
    <ul>
      <li><a href="../quan_ly_nha_san_xuat/index.php">Xem tất cả nhà sản xuất</a></li>
      <li><a href="../quan_ly_nha_san_xuat/view_insert_nsx.php">Thêm nhà sản xuất</a></li>
    </ul>
  </li>
  <?php } ?>
  <li><a href="../quan_ly_san_pham/index.php">Quản lý sản phẩm</a>
    <ul>
      <li><a href="../quan_ly_san_pham/index.php">Xem sản phẩm</a></li>
      <li><a href="../quan_ly_san_pham/view_insert_sp.php">Thêm sản phẩm</a></li>
    </ul>
  </li>
  <li><a href="../quan_ly_khach_hang/index.php">Quản lý khách hàng</a>
    <ul>
      <li><a href="../quan_ly_khach_hang/view_insert_khach_hang.php">Thêm khách hàng</a></li>
    </ul>
  </li>
  <li><a href="../quan_ly_hoa_don/index.php">Quản lý hóa đơn</a></li>
  <li><a href="../quan_ly_admin/logout_admin.php">Đăng xuất</a></li>
</ul>
</nav>

