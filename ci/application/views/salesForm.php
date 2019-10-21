<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>S.A.S Garments</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>styles/mystyle.css">
	<style type="text/css">
		#SalesForm {
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
				<div class='form-item'>
					<label class="form-label" for="price">Select Product</label>
					<select class="form-input" name="prod_id" style="width: 35%;">
						<option value="">Select product</option>
						<?php if(!empty($prod_list)) { foreach ($prod_list as $prod) { ?>
							<option value="<?=$prod['prod_id']?>" <?=!empty($sale_det['sale_id'])?($sale_det['prod_id']==$prod['prod_id'])?"selected":"":""?>><?=$prod['prod_name']?></option>
						<?php }	}?>
					</select>
				</div>
				<div>
					<input class="form-button" class="submitBtn" type="submit" value="Save Sales" />
				</div>
			</form>
		</div>
		
	</div>
</body>
</html>