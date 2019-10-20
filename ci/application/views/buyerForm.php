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
		#BuyerForm {
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

		<!-- Buyer add/edit form -->
		<div id="BuyerForm">
			<h2>Buyer Add/Edit Forms</h2>
			<form id="addForm" action="<?=base_url()?>dashboard/update_buyer" method="post">
				<input type="hidden" name="buy_id" value="<?=!empty($buy_det['buy_id'])?$buy_det['buy_id']:''?>" />
				<div class='form-item'>
					<label class="form-label" for="buy_name">Buyer Name</label>
					<input class="form-input" type="text" placeholder="Buyer Name" name="buy_name" value="<?=!empty($buy_det['buy_name'])?$buy_det['buy_name']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="buy_ph">Buyer Phone</label>
					<input class="form-input" type="number" placeholder="Buyer Phone" name="buy_ph" value="<?=!empty($buy_det['buy_ph'])?$buy_det['buy_ph']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="buy_add">Buyer Address</label>
					<input class="form-input" type="text" placeholder="Buyer Address" name="buy_add" value="<?=!empty($buy_det['buy_add'])?$buy_det['buy_add']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="total_amt">Total Amount</label>
					<input class="form-input" type="number" placeholder="Buyer Price" name="total_amt" value="<?=!empty($buy_det['total_amt'])?$buy_det['total_amt']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="paid_amt">Paid Amount</label>
					<input class="form-input" type="number" placeholder="Buyer Stock" name="paid_amt" value="<?=!empty($buy_det['paid_amt'])?$buy_det['paid_amt']:''?>" required />
				</div>
				<div>
					<input class="form-button" class="submitBtn" type="submit" value="Save Buyer" />
				</div>
			</form>
		</div>
		
	</div>
</body>
</html>