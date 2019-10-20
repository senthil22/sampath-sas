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
		#PurchaseForm {
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

		<!-- Purchase add/edit form -->
		<div id="PurchaseForm">
			<h2>purchase Add/Edit Forms</h2>
			<form id="addForm" action="<?=base_url()?>dashboard/update_purchase" method="post">
				<input type="hidden" name="pur_id" value="<?=!empty($pur_det['pur_id'])?$pur_det['pur_id']:''?>" />
				<div class='form-item'>
					<label class="form-label" for="pur_item">Purchase item</label>
					<input class="form-input" type="text" placeholder="Purchase Name" name="pur_item" value="<?=!empty($pur_det['pur_item'])?$pur_det['pur_item']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="unit">No of unit</label>
					<input class="form-input" type="number" placeholder="No of unit" name="unit" value="<?=!empty($pur_det['unit'])?$pur_det['unit']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="price">Purchase Price</label>
					<input class="form-input" type="number" placeholder="Purchase Price" name="price" value="<?=!empty($pur_det['price'])?$pur_det['price']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="price">Select Product</label>
					<select class="form-input" name="prod_id" style="width: 35%;">
						<option value="">Select product</option>
						<?php if(!empty($prod_list)) { foreach ($prod_list as $prod) { ?>
							<option value="<?=$prod['prod_id']?>" <?=($pur_det['prod_id']==$prod['prod_id'])?"selected":""?>><?=$prod['prod_name']?></option>
						<?php }	}?>
					</select>
				</div>
				<div>
					<input class="form-button" class="submitBtn" type="submit" value="Save Purchase" />
				</div>
			</form>
		</div>
		
	</div>
</body>
</html>
