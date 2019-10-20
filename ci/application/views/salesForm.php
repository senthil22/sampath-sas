<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>S.A.S Garments</title>
	<style type="text/css">
		body {
			margin: 0;    		
		}		
		.header {
			background-color: #3a8883;
			padding: 16px 16px;
			text-transform: uppercase;
			text-align: center;
			font-size: 2em;
			border-bottom: 2px solid #000000;
			display: flex;
			justify-content: space-between;
		}
		.header a {
			font-size: 16px;
    		text-decoration: none;
		}
		#SalesForm {
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
		}
		#addForm {
			display: flex;
			flex-direction: column;
			border: 1px solid red;
			padding: 29px;
			width: 40%;
		}
		.form-item {
			display: flex;
			align-items: center;
			justify-content: space-between;
			margin: 4px 0px;
		}
		.form-input {
			padding: 9px;
		}
		.form-button {
			padding: 9px;
			background-color: #0e69d2;
			border: 0;
			border-radius: 3px;
			text-transform: uppercase;
		}
		.username {
			color: #fff;
			font-style: oblique;
			text-shadow: 2px 2px #ce9191;
		}
		
	</style>
</head>
<body>
	<div id="container">
		<div class="header">
			<div class="username"><?=$name?></div>
			<div>S.A.S Garments</div>
			<div><a href="<?=base_url()?>login/logout">Logout</a></div>
		</div>

		<!-- Sales add/edit form -->
		<div id="SalesForm">
			<h2>sales Add/Edit Forms</h2>
			<form id="addForm" action="<?=base_url()?>dashboard/update_sales" method="post">
				<input type="hidden" name="sale_id" value="<?=!empty($sale_det['sale_id'])?$sale_det['sale_id']:''?>" />
				<div class='form-item'>
					<label class="form-label" for="name">Sales item</label>
					<input class="form-input" type="text" placeholder="Sales Name" name="name" value="<?=!empty($sale_det['name'])?$sale_det['name']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="unit">No of unit</label>
					<input class="form-input" type="number" placeholder="No of unit" name="unit" value="<?=!empty($sale_det['unit'])?$sale_det['unit']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="price">Sales Price</label>
					<input class="form-input" type="number" placeholder="Sales Price" name="price" value="<?=!empty($sale_det['price'])?$sale_det['price']:''?>" required />
				</div>
				<div>
					<input class="form-button" class="submitBtn" type="submit" value="Save Sales" />
				</div>
			</form>
		</div>
		
	</div>
</body>
</html>