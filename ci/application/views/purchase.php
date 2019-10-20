<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="addprod">
	<div>
		<h2>purchase list</h2>
		<a href="<?=base_url()?>dashboard/purchase">Add new purchase</a>
	</div>
</div>
<div class="contentList">
<?php if(!empty($purchase)) { ?>
	<table>
		<tr>
			<th>purchase id</th>
			<th>purchase item</th>
			<th>Product name</th>
			<th>purchase date</th>
			<th>unit</th>
			<th>price</th>
			<th></th>
		</tr>
		<?php foreach ($purchase as $prod) { ?>
			<tr>
				<td><?=$prod['pur_id']?></td>
				<td><?=$prod['pur_item']?></td>
				<td><?=$prod['prod_name']?></td>
				<td><?=$prod['pur_date']?></td>
				<td><?=$prod['unit']?></td>
				<td><?=!empty($prod['price'])?$prod['price']:''?></td>				
				<td><a href="<?=base_url()?>dashboard/purchase?id=<?=$prod['pur_id']?>">update</a> <a href="<?=base_url()?>dashboard/delete_purchase?id=<?=$prod['pur_id']?>">delete</a></td>
			</tr>
		<?php }  if(!empty($purchaseTotal)) { ?>
			<tr style="background-color: #f7f7ad;">
				<td colspan="5">Purchase Total</td>
				<td><?=$purchaseTotal['pur_tot']?></td>
			</tr>
		<?php } ?>
	</table>
<?php } else { ?>
	No purchase available
<?php } ?>
</div>