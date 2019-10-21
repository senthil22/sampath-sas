<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="addprod">
	<h2>Reports</h2>
</div>
<div class="reportForm">
	<h5 style="font-size: 1em;">Select your start date and end date to generate reports</h5>
	<form action=""  method="get">
		<input type="hidden" name="t" value="report">
		<input class="reportDate" type="date" name="sdate" value="<?=!empty($sdate)?$sdate:''?>">
		<input class="reportDate" type="date" name="edate" value="<?=!empty($edate)?$edate:''?>">
		<input class="form-button"  type="submit">
	</form>
</div>
<div class="contentList">

<!--purchase report-->
<?php if(!empty($pur_report)) { ?>
	<h3>purchase reports</h3>
	<table>
		<tr>
			<th>purchase id</th>
			<th>purchase item</th>
			<th>purchase date</th>
			<th>unit</th>
			<th>price</th>
		</tr>
		<?php foreach ($pur_report as $prod) { ?>
			<tr>
				<td><?=$prod['pur_id']?></td>
				<td><?=$prod['pur_item']?></td>
				<td><?=$prod['date']?></td>
				<td><?=$prod['unit']?></td>
				<td><?=$prod['price']?></td>
			</tr>
		<?php }  if(!empty($pur_rep_total)) { ?>
			<tr style="background-color: #f7f7ad;">
				<td colspan="4">Purchase Total</td>
				<td><?=$pur_rep_total['total']?></td>
			</tr>
		<?php } ?>
	</table>
<?php } ?>
<!--end purchase report-->

<!--sales report-->
<?php if(!empty($sales_report)) { ?>
	<h3>sales reports</h3>
	<table>
		<tr>
			<th>sales id</th>
			<th>sales name</th>
			<th>sales date</th>
			<th>unit</th>
			<th>price</th>
		</tr>
		<?php foreach ($sales_report as $prod) { ?>
			<tr>
				<td><?=$prod['sale_id']?></td>
				<td><?=$prod['name']?></td>
				<td><?=$prod['date']?></td>
				<td><?=$prod['unit']?></td>
				<td><?=!empty($prod['price'])?$prod['price']:''?></td>
			</tr>
		<?php } if(!empty($sales_rep_total)) { ?>
			<tr style="background-color: #f7f7ad;">
				<td colspan="4">Sales Total</td>
				<td><?=$sales_rep_total['total']?></td>
			</tr>
		<?php } ?>
	</table>
<?php } ?>
<!--end sales report-->

<!--dealers report-->
<?php if(!empty($dealers_report)) { ?>
	<h3>dealers reports</h3>
	<table>
		<tr>
			<th>dealers id</th>
			<th>dealers name</th>
			<th>dealers address</th>
			<th>dealers Phone</th>
			<th>date</th>
		</tr>
		<?php foreach ($dealers_report as $prod) { ?>
			<tr>
				<td><?=$prod['deal_id']?></td>
				<td><?=$prod['deal_name']?></td>
				<td><?=!empty($prod['deal_addr'])?$prod['deal_addr']:''?></td>
				<td><?=$prod['deal_ph']?></td>
				<td><?=$prod['date']?></td>
			</tr>
		<?php } ?>
	</table>
<?php } ?>
<!--end dealers report-->

<!--buyers report-->
<?php if(!empty($buyers_report)) { ?>
	<h3>buyers reports</h3>
	<table>
		<tr>
			<th>buyer id</th>
			<th>buyer name</th>
			<th>Phone</th>
			<th>address</th>
			<th>date</th>
			<th>Toatal amount</th>
			<th>paid amount</th>
		</tr>
		<?php foreach ($buyers_report as $prod) { ?>
			<tr>
				<td><?=$prod['buy_id']?></td>
				<td><?=$prod['buy_name']?></td>
				<td><?=$prod['buy_ph']?></td>
				<td><?=$prod['buy_add']?></td>
				<td><?=$prod['date']?></td>
				<td><?=$prod['total_amt']?></td>
				<td><?=$prod['paid_amt']?></td>
			</tr>
		<?php } if(!empty($buyers_rep_totals)) { ?>
			<tr style="background-color: #f7f7ad;">
				<td colspan="5">Total</td>
				<td><?=$buyers_rep_totals['total']?></td>
				<td><?=$buyers_rep_totals['paidtotal']?></td>
			</tr>
			<tr style="background-color: #f5cdcd;">
				<td colspan="6">Balance Amount</td>
				<td><?=$buyers_rep_totals['total'] - $buyers_rep_totals['paidtotal']?></td>
			</tr>
		<?php } ?>
	</table>
<?php } ?>
<!--end buyers report-->

<?php if(!empty($stock)) { ?>
	<h3>Products stock details</h3>
	<table>
		<tr>
			<th>product name</th>
			<th>size</th>
			<th>color</th>
			<th>stock</th>
			<th>Required details</th>
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
<?php } ?>
</div><br /><br />