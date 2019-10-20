<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="addprod">
	<div>
		<h2>Buyer list</h2>
		<a href="<?=base_url()?>dashboard/buyer">Add new buyer</a>
	</div>
</div>
<div class="contentList">
<?php if(!empty($buyers)) { ?>
	<table>
		<tr>
			<th>buyer id</th>
			<th>buyer name</th>
			<th>Phone</th>
			<th>address</th>
			<th>Toatal amount</th>
			<th>paid amount</th>
			<th>date</th>
			<th></th>
		</tr>
		<?php foreach ($buyers as $prod) { ?>
			<tr>
				<td><?=$prod['buy_id']?></td>
				<td><?=$prod['buy_name']?></td>
				<td><?=$prod['buy_ph']?></td>
				<td><?=$prod['buy_add']?></td>
				<td><?=$prod['total_amt']?></td>
				<td><?=$prod['paid_amt']?></td>
				<td><?=$prod['date']?></td>
				<td><a href="<?=base_url()?>dashboard/buyer?id=<?=$prod['buy_id']?>">update</a> <a href="<?=base_url()?>dashboard/delete_buyer?id=<?=$prod['buy_id']?>">delete</a> </td>
			</tr>
		<?php } ?>
	</table>
<?php } else { ?>
	No products available
<?php } ?>
</div>