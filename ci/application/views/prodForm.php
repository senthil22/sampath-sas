<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>S.A.S Garments</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>styles/mystyle.css">
	<style type="text/css">
		#ProductForm {
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
		}
	</style>
</head>
<body>
	<div id="container">
		<div class="header">
			<div class="username"><?=$name?></div>
			<div>S.A.S Garments</div>
			<a href="<?=base_url()?>login/logout">Logout</a>
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