<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>S.A.S Garments</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>styles/mystyle.css">
</head>
<body>
	<div id="container">
		<?php 
			$tap = 'product';
			if(!empty($_GET['t'])) {
				if(in_array($_GET['t'], $tapList)) {
					$tap = $_GET['t'];
				} else {
					$tap = 'product';
				}
			}
		?>
		<div class="header">
			<div class="username"><?=$name?></div>
			<div>S.A.S Garments</div>
			<a href="<?=base_url()?>login/logout">Logout</a>
		</div>
		<div class="subheader">
			<ul class="subtitles">
				<li class="list <?=($tap=='product')?'selectedTap':''?>"><a href="?t=product">Product</a></li>
				<li class="list <?=($tap=='buyer')?'selectedTap':''?>"><a href="?t=buyer">Buyer</a></li>
				<li class="list <?=($tap=='report')?'selectedTap':''?>"><a href="?t=report">Report</a></li>
				<li class="list <?=($tap=='aboutus')?'selectedTap':''?>"><a href="?t=aboutus">About us</a></li>
			</ul>
		</div>
		<!-- Product list -->
		<div id="ProductList" class="tablecontent <?=($tap=='product')?'show':''?>"> <br/>
			<?php $this->load->view('products'); ?><br/>
			<?php $this->load->view('purchase'); ?><br/>
			<?php $this->load->view('sales'); ?>
		</div>
		
		<!-- Buyer list -->
		<div id="BuyerList" class="tablecontent <?=($tap=='buyer')?'show':''?>"> <br/>
			<br/><?php $this->load->view('dealers'); ?><br/>
			<?php $this->load->view('buyers'); ?>
		</div>

		<!-- Reports -->
		<div id="ReportList" class="tablecontent <?=($tap=='report')?'show':''?>">
			<?php $this->load->view('reports'); ?>
		</div>

		<!-- About US -->
		<div id="AboutUS" class="tablecontent <?=($tap=='aboutus')?'show':''?>">
			<?php $this->load->view('about_us'); ?>
		</div>
		
	</div>
</body>
</html>