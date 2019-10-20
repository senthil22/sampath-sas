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
		#ProductForm {
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

		<!-- Product add/edit form -->
		<div id="ProductForm">
			<h2>Product Add/Edit Forms</h2>
			<form id="addForm" action="<?=base_url()?>dashboard/update_product" method="post">
				<input type="hidden" name="prod_id" value="<?=!empty($prod_det['prod_id'])?$prod_det['prod_id']:''?>" />
				<div class='form-item'>
					<label class="form-label" for="prod_name">Product Name</label>
					<input class="form-input" type="text" placeholder="Product Name" name="prod_name" value="<?=!empty($prod_det['prod_name'])?$prod_det['prod_name']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="size">Product Size</label>
					<input class="form-input" type="text" placeholder="Product Size" name="size" value="<?=!empty($prod_det['size'])?$prod_det['size']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="color">Product Color</label>
					<input class="form-input" type="text" placeholder="Product Color" name="color" value="<?=!empty($prod_det['color'])?$prod_det['color']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="price">Product Price</label>
					<input class="form-input" type="number" placeholder="Product Price" name="price" value="<?=!empty($prod_det['price'])?$prod_det['price']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="stock">Product Stock</label>
					<input class="form-input" type="number" placeholder="Product Stock" name="stock" value="<?=!empty($prod_det['stock'])?$prod_det['stock']:''?>" required />
				</div>
				<div>
					<input class="form-button" class="submitBtn" type="submit" value="Save Product" />
				</div>
			</form>
		</div>
		
	</div>
</body>
</html>