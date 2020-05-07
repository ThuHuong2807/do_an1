<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			margin: 0;
			padding:0;
			background-size: cover;
			background-position: center;
			font-family: sans-serif;
		}
		.loginbox{
			min-width: 320px;
			background: #fff;
			color: #000000;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			padding: 30px;
		    border-radius: 10px;
		    box-shadow: 0 12px 16px #999;
		}
		h1{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
		}
		.loginbox input{
		    width: 100%;
		    height: 40px;
		    line-height: 40px;
		    border-radius: 10px;
		    border: 1px solid #9999;
		    text-indent: 20px;
		}
		.loginbox input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background:#a7d8dc;
			color: #fff;
			font-size: 18px;
			border-radius: 20px;
		}
		.loginbox input[type="radio"]{
		    width: auto;
		    height: auto;
		    margin-bottom: 0;
		}
		.gioi_tinh label {
		    margin-right: 16px;
		}
		td {
			padding-bottom: 16px;
		}
		button {
		    display: inline-block;
		    height: 40px;
		    line-height: 40px;
		    margin-right: 20px;
		    text-decoration: none;
		    background: #a7d8dc;
		    border-radius: 100px;
		    padding: 0 20px;
		    color: #000;
		    display: block;
		    text-align: center;
		}
		button:hover {
		    opacity: 0.8;
		}
	</style>
</head>
<body>
	<?php
	if(isset($_GET['error'])) {
	?>
	<h3><?php echo $_GET['error'] ?></h3>
<?php } ?>
<div class="loginbox">
    <h1>Đăng ký</h1>
	<form action="process_dang_ky_khach_hang.php" method="get">
		<table>
			<tr>
				<td>Tên</td>
				<td><input type="text" name="ten_khach_hang"></td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td class="gioi_tinh">
					<label><input checked type="radio" name="gioi_tinh" value="1">Nam</label>
					<label><input type="radio" name="gioi_tinh" value="0">Nữ</label>
				</td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" name="so_dien_thoai"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" name="mat_khau"></td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><textarea name="dia_chi"></textarea></td>
			</tr>
		</table>
		<center>
			<button>Đăng ký</button>
		</center>
	</form>
</div>
</body>
</html>