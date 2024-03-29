<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>S.A.S Garments</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>styles/mystyle.css">
	<style type="text/css">
		#DealersForm {
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

		<!-- Dealers add/edit form -->
		<div id="DealersForm">
			<h2>Dealers Add/Edit Forms</h2>
			<form id="addForm" action="<?=base_url()?>dashboard/update_dealers" method="post">
				<input type="hidden" name="deal_id" value="<?=!empty($deal_det['deal_id'])?$deal_det['deal_id']:''?>" />
				<div class='form-item'>
					<label class="form-label" for="deal_name">Dealers Name</label>
					<input class="form-input" type="text" placeholder="Dealers Name" name="deal_name" value="<?=!empty($deal_det['deal_name'])?$deal_det['deal_name']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="deal_ph">Dealers Phone</label>
					<input class="form-input" type="number" placeholder="Dealers Phone" name="deal_ph" value="<?=!empty($deal_det['deal_ph'])?$deal_det['deal_ph']:''?>" required />
				</div>
				<div class='form-item'>
					<label class="form-label" for="deal_addr">Dealers Address</label>
					<input class="form-input" type="text" placeholder="Dealers Address" name="deal_addr" value="<?=!empty($deal_det['deal_addr'])?$deal_det['deal_addr']:''?>" required />
				</div>
				<div>
					<input class="form-button" class="submitBtn" type="submit" value="Save Dealers" />
				</div>
			</form>
		</div>
		
	</div>
</body>
</html>