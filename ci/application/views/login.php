<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>S.A.S Garments</title>
	<style type="text/css">
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
			margin: 0;
    		background-color: #3a8883;
		}
		#container {
			padding: 35px 93px;
			margin: 10px;
			border: 1px solid #000000;
			background-color: #ffffff;
			position: absolute;
    		
		}
		.login-icon {
			width: 40px;
			border: 1px solid;
			border-radius: 30px;
			padding: 10px;
		}
		h1 {
			text-transform: uppercase;
			margin: 4px 0;
		}
		.form-item {
			margin-bottom: 10px;
		}
		input {
			padding: 7px;
		}
		.submitBtn {
			padding: 7px 34px;
    		border-radius: 7px;
		}
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<div id="container">
		<h1>S.A.S Garments</h1>
		<img class="login-icon" src="<?=base_url()?>images/user-icon.png" />
		<form id="loginForm" action="<?=base_url()?>login" method="post">
			<div class='form-item'>
				<input type="text" placeholder="Username" name="username" required="" id="username" />
			</div>
			<div class='form-item'>
				<input type="password" placeholder="Password" name="password" required="" id="password" />
			</div>
			<div class='form-item'>
				<input class="submitBtn" type="submit" value="Log in" />
			</div>			
			<div class="error"><?php if(!empty($msg))print_r($msg); ?></div>
		</form>
	</div>
</body>
</html>