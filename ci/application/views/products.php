<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="addprod">
	<div>
		<h2>Product list</h2>
		<a href="<?=base_url()?>dashboard/product">Add new product</a>
	</div>
</div>
<div class="contentList">
<?php if(!empty($product)) { ?>
	<table>
		<tr>
			<th>product name</th>
			<th>size</th>
			<th>color</th>
			<th>price</th>
			<th>stock</th>
			<th></th>
		</tr>
		<?php foreach ($product as $prod) { ?>
			<tr>
				<td><?=$prod['prod_name']?></td>
				<td><?=$prod['size']?></td>
				<td><?=!empty($prod['color'])?$prod['color']:''?></td>
				<td><?=$prod['price']?></td>
				<td><?=$prod['stock']?></td>
				<td><a href="<?=base_url()?>dashboard/product?id=<?=$prod['prod_id']?>">update</a> <a href="<?=base_url()?>dashboard/delete_product?id=<?=$prod['prod_id']?>">delete</a></td>
			</tr>
		<?php } ?>
	</table>
<?php } else { ?>
	No products available
<?php } ?>
</div>