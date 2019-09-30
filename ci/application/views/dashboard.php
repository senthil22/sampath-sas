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
		#container {

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
		.subheader {
			background-color: #c6d2be;
		}
		.subtitles {
			margin: 0;
			margin: 0;
			list-style: none;
			display: flex;
			flex-direction: row;
		}
		.list {
			padding: 12px 34px;
		}
		.list a {
			text-transform: uppercase;
			cursor: pointer;
		}
		.list a:hover {
			background-color: yellow;
		}
		.tablecontent {
			display: none;
		}
		.show {
			display: block;
		}
		h2 {
			text-transform: uppercase;
			margin: 8px 0;
    		text-align: center;
		}
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 60%;
		}

		td, th {
			border: 1px solid #000000;
			text-align: left;
			padding: 8px;
			text-align: center;
		}
		th {
			text-transform: uppercase;
		}
		td {
			text-transform: capitalize;
		}
		tr:nth-child(even) {
			background-color: #dddddd;
		}
		.contentList, .address {
			display: flex;
    		flex-direction: column;
    		align-items: center;
		}
		.address {
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div id="container">
		<div class="header">
			<div>S.A.S Garments</div>
			<div><a href="<?=base_url()?>login/logout">Logout</a></div>
		</div>
		
		<div class="subheader">
			<ul class="subtitles">
				<li class="list"><a onclick="addClass('ProductList')">Product</a></li>
				<li class="list"><a onclick="addClass('BuyerList')">Buyer</a></li>
				<li class="list"><a onclick="addClass('ReportList')">Report</a></li>
				<li class="list"><a onclick="addClass('AboutUS')">About us</a></li>
			</ul>
		</div>
		<!-- Product list -->
		<div id="ProductList" class="tablecontent show">
			<h2>Product list</h2>
			<div class="contentList">
			<?php if(!empty($product)) { ?>
				<table>
					<tr>
						<th>product name</th>
						<th>size</th>
						<th>color</th>
						<th>price</th>
						<th>stock</th>
					</tr>
					<?php foreach ($product as $prod) { ?>
						<tr>
							<td><?=$prod['prod_name']?></td>
							<td><?=$prod['size']?></td>
							<td><?=$prod['color']?></td>
							<td><?=$prod['price']?></td>
							<td><?=$prod['stock']?></td>
						</tr>
					<?php } ?>
				</table>
			<?php } else { ?>
				No products available</div>
			<?php } ?>
			</div>
		</div>
		
		<!-- Buyer list -->
		<div id="BuyerList" class="tablecontent">
			<h2>Buyer list</h2>
			<div class="contentList">
			<?php if(!empty($buyer)) { ?>
				<table>
					<tr>
						<th>buyer name</th>
						<th>Phone</th>
						<th>address</th>
						<th>Toatal amount</th>
						<th>paid amount</th>
					</tr>
					<?php foreach ($buyer as $prod) { ?>
						<tr>
							<td><?=$prod['buy_name']?></td>
							<td><?=$prod['buy_ph']?></td>
							<td><?=$prod['buy_add']?></td>
							<td><?=$prod['total_amt']?></td>
							<td><?=$prod['paid_amt']?></td>
						</tr>
					<?php } ?>
				</table>
			<?php } else { ?>
				No products available</div>
			<?php } ?>
			</div>
		</div>

		<!-- Reports -->
		<div id="ReportList" class="tablecontent">
			<h2>Reports</h2>
			<div class="contentList">
			
			</div>
		</div>

		<!-- About US -->
		<div id="AboutUS" class="tablecontent">
			<h2>About US</h2>
			<div class="contentList">
				<div class="address">
					<div>xxxxxx</div>
					<div>xxxxxxddddd</div>
					<div>xxxxxxdddd</div>
					<div>xxxxxx  ddddd</div>
					<div>123456 </div>
				</div>
			</div>
		</div>
		
	</div>
</body>
<script>
	function addClass(idName) {
		var rem = document.getElementsByClassName("tablecontent");
		for (var i=0; i < rem.length; i++) {
			rem[i].classList.remove("show");
		}
		document.getElementById(idName).classList.add('show');
	}
</script>
</html>
