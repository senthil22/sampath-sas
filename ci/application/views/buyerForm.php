<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>S.A.S Garments</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>styles/mystyle.css">
	<style type="text/css">
		#BuyerForm {
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