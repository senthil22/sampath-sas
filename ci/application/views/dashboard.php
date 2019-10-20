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
			width: 87%;
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
		.addprod {
			display: flex;
			justify-content: space-evenly;
		}
		.addprod>div {
			display: flex;
			align-items: center;
			justify-content: space-evenly;
			background-color: #7af5cb;
			width: 87%;
		}
		.addprod a {
			text-transform: uppercase;
			text-decoration: none;
			border: 1px solid #497be0;
			background-color: #497be0;
			color: #fbfbfb;
			padding: 4px;
			border-radius: 5px;
		}
		table td a {
			border: 1px solid #000;
			text-decoration: none;
			padding: 2px;
			text-transform: capitalize;
			border-radius: 5px;
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
			<?php  ?><br/>
			<?php $this->load->view('purchase'); ?><br/>
			<?php $this->load->view('sales'); ?>
		</div>
		
		<!-- Buyer list -->
		<div id="BuyerList" class="tablecontent">
			<br/>
			<br/><?php $this->load->view('dealers'); ?><br/>
			<?php $this->load->view('buyers'); ?>
		</div>

		<!-- Reports -->
		<div id="ReportList" class="tablecontent">
			<?php $this->load->view('reports'); ?>
		</div>

		<!-- About US -->
		<div id="AboutUS" class="tablecontent">
			<?php $this->load->view('about_us'); ?>
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