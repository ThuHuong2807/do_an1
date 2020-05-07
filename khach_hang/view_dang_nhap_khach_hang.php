<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
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
	width: 320px;
	background: #fff;
	color: #000000;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	padding: 70px 30px;
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
    margin-bottom: 20px;
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
	font-size: 18px;
	border-radius: 20px;
}
</style>
</head>
<body>
<div class="loginbox">
        <h1>Đăng nhập</h1>
        <form action="process_dang_nhap_khach_hang.php" method="GET">
        Email
			<input type="text" name="email">
			<br>
		Mật khẩu
			<input type="password" name="mat_khau">
			<br>
			<br>
			<br>
            <input type="submit" name="" value="Đăng nhập">
        </form>  
    </div>
</body>
</html>