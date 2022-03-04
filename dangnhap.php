<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Đăng Nhập</title>
	<style type="text/css">
	     :root{
	     	--bg1: #9b59b6;
	     	--bg2: #3498db;
	     	--bg3: #26ade4;
	     }	
 
		*{
			margin: 0;
			padding: 0;
			outline: none;

		}
		a{
			text-decoration: none;
		}
		.container{
			display: flex;
			justify-content: center;
			align-items: center;
			text-align: center;
			width: 100vw;
			height: 100vh;
			background: linear-gradient(to bottom right,var(--bg1),var(--bg2));
		}
		.form-login{
			width: 300px;
			height: 500px;
			background: #fff;
			border-radius: 10px;
			padding: 40px 30px;
			top: 20px;
		}
		.form-login h1 {
			margin-bottom: 40px;
		}
		.form-text{
			margin-bottom: 40px;
			position: relative;
		}
		.form-text input {
                width: 100%;
                height: 35px;
                border: none;
                border-bottom: 2px solid #ccc;
                cursor: pointer;
                padding: 12px;
		}
		 .form-login button{
			height: 35px;
			width: 100%;
			margin-bottom: 30px;
			background: linear-gradient(120deg,var(--bg1),var(--bg2));
			border: none;
			color: #fff;
			border-radius: 5px;
			background-size: 200%;
			transition: 0.5s;
		}
		.form-login button:hover{
			background-position: right;
		}
		
		

	</style>
</head>
<body>
     <div class="container">
     	<form method="post" class="form-login">
     		<h1>Đăng Nhập</h1>
     		<div class="form-text">
     			
     			<input type="text" name="username" placeholder="username..." >
     		</div>
     		<div class="form-text">
     		
     			<input type="password" name="password" placeholder="Nhập password...">
     		</div>
     		<button type="submit" name="login">Đăng Nhập</button>
     		
     		
     	
     		<span>Bạn chưa có tài khoản? Đăng ký <a href="dangki.php">Tại Đây</a></span>
     	</form>
     </div>
     
    
</body>
</html>