<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="addprod">
	<div>
		<h2>dealers list</h2>
		<a href="<?=base_url()?>dashboard/dealers">Add new dealer</a>
	</div>
</div>
<div class="contentList">
<?php if(!empty($dealers)) { ?>
	<table>
		<tr>
			<th>dealers id</th>
			<th>dealers name</th>
			<th>dealers address</th>
			<th>dealers Phone</th>
			<th>date</th>
			<th></th>
		</tr>
		<?php foreach ($dealers as $prod) { ?>
			<tr>
				<td><?=$prod['deal_id']?></td>
				<td><?=$prod['deal_name']?></td>
				<td><?=!empty($prod['deal_addr'])?$prod['deal_addr']:''?></td>
				<td><?=$prod['deal_ph']?></td>
				<td><?=$prod['date']?></td>
				<td><a href="<?=base_url()?>dashboard/dealers?id=<?=$prod['deal_id']?>">update</a> <a href="<?=base_url()?>dashboard/delete_dealers?id=<?=$prod['deal_id']?>">delete</a></td>
			</tr>
		<?php } ?>
	</table>
<?php } else { ?>
	No dealers available
<?php } ?>
</div>