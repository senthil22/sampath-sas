<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="addprod">
	<h2>Reports</h2>
</div>
<div class="reportForm">
	<form action="#"  method="get">		
		<input class="reportDate" type="date" name="startday">
		<input class="reportDate" type="date" name="endday">
		<input class="form-button"  type="submit">
	</form>
</div>
<div class="contentList">
<?php if(!empty($stock)) { ?>
	<table>
		<tr>
			<th>product name</th>
			<th>size</th>
			<th>color</th>
			<th>stock</th>
			<th style="background-color: green;">Required details</th>
		</tr>
		<?php foreach ($stock as $prod) { ?>
			<tr>
				<td><?=!empty($prod['prod_name'])?$prod['prod_name']:''?></td>
				<td><?=!empty($prod['size'])?$prod['size']:''?></td>
				<td><?=!empty($prod['color'])?$prod['color']:''?></td>
				<td><?=!empty($prod['stock'])?$prod['stock']:''?></td>
				<td style="background-color: <?=($prod['required'] > 0)?'yellow':'red'?>;"><?=!empty($prod['required'])?$prod['required']:''?></td>
			</tr>
		<?php } ?>
	</table>
<?php } else { ?>
	No reports available
<?php } ?>
</div>