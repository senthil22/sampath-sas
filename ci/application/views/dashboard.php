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
				<li class="list"><a onclick="addClass('CompanyList')">Company</a></li>
				<li class="list"><a onclick="addClass('ReportList')">Report</a></li>
			</ul>
		</div>
		<div id="ProductList" class="tablecontent show">
			<h2>Product list</h2>
		</div>
		<div id="CompanyList" class="tablecontent">
			<h2>Company list</h2>
		</div>
		<div id="ReportList" class="tablecontent">
			<h2>Reports</h2>
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