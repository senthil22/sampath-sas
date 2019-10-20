<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="addprod">
	<div>
		<h2>sales list</h2>
		<a href="<?=base_url()?>dashboard/sales">Add new sales</a>
	</div>
</div>
<div class="contentList">
<?php if(!empty($sales)) { ?>
	<table>
		<tr>
			<th>sales id</th>
			<th>sales name</th>
			<th>Product name</th>
			<th>sales date</th>			
			<th>unit</th>
			<th>price</th>
			<th></th>
		</tr>
		<?php foreach ($sales as $prod) { ?>
			<tr>
				<td><?=$prod['sale_id']?></td>
				<td><?=$prod['name']?></td>
				<td><?=$prod['prod_name']?></td>
				<td><?=$prod['date']?></td>
				<td><?=$prod['unit']?></td>
				<td><?=!empty($prod['price'])?$prod['price']:''?></td>
				<td><a href="<?=base_url()?>dashboard/sales?id=<?=$prod['sale_id']?>">update</a> <a href="<?=base_url()?>dashboard/delete_sales?id=<?=$prod['sale_id']?>">delete</a></td>
			</tr>
		<?php } if(!empty($salesTotal)) { ?>
			<tr style="background-color: #f7f7ad;">
				<td colspan="5">Sales Total</td>
				<td><?=$salesTotal['sales_tot']?></td>
			</tr>
		<?php } ?>
	</table>
<?php } else { ?>
	No sales available
<?php } ?>
</div>
