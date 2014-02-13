<div class="breadcrumb">
	<?php echo $breadcrumb; ?>
</div>
<div class="box">
	<div id="list-box" class="content">
	<form accept-charset="utf-8" method="post" action="<?php echo current_url(); ?>">
	<table align="center" class="list">
		<tr>
			<th width="1" style="text-align:center;"><input type="checkbox" onclick="$('input[name*=\'delete\']').prop('checked', this.checked);"></th>
			<th class="center">Photo</th>
			<th>Name</th>
			<th>Price</th>
			<th>Category</th>
			<th>Stock Quantity</th>
			<th class="right">Status</th>
			<th class="right">Action</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><select name="filter_category">
				<option value=""></option>
				<?php foreach ($categories as $category) { ?>
				<?php if ($category['category_id'] === $category_id) { ?>				
					<option value="<?php echo $category['category_id']; ?>" <?php echo set_select('filter_category', $category['category_id'], TRUE); ?> ><?php echo $category['category_name']; ?></option>
				<?php } else { ?>
					<option value="<?php echo $category['category_id']; ?>" <?php echo set_select('filter_category', $category['category_id']); ?> ><?php echo $category['category_name']; ?></option>
				<?php } ?>
				<?php } ?>
			</select>
			</td>
			<td></td>
			<td></td>
			<td class="right"><a onclick="filter_list();">Filter</a></td>
		</tr>
		<?php if ($menus) {?>
		<?php foreach ($menus as $menu) { ?>
		<tr id="<?php echo $menu['menu_id']; ?>">
			<td><input type="checkbox" value="<?php echo $menu['menu_id']; ?>" name="delete[]" /></td>
			<td class="center"><a href="" alt="click to view full image" target="_blank"><img src="<?php echo $menu['menu_photo']; ?>" width="80" height="70"></a></td>
			<td class="menu_name"><?php echo $menu['menu_name']; ?></td>
			<td><?php echo $menu['menu_price']; ?></td>
			<td><?php echo $menu['category_name']; ?></td>
			<td><?php echo ($menu['stock_qty'] < 1) ? '<span class="red">'.$menu['stock_qty'].'</span>' : $menu['stock_qty']; ?></td>
			<td class="right"><?php echo $menu['menu_status']; ?></td>
			<td class="right"><a class="edit" title="Edit" href="<?php echo $menu['edit']; ?>"></a></td>
		</tr>
		<?php } ?>
		<?php } else { ?>
		<tr>
			<td colspan="8"><?php echo $text_no_menus; ?></td>
		</tr>
		<?php } ?>
	</table>
	</form>

	<div class="pagination">
		<div class="links"><?php echo $pagination['links']; ?></div>
		<div class="info"><?php echo $pagination['info']; ?></div> 
	</div>
	</div>	
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-ui-timepicker-addon.js"); ?>"></script> 
<script type="text/javascript"><!--
$(document).ready(function() {
	$('#start-date, #end-date').datepicker({
		dateFormat: 'yy-mm-dd',
	});
  	
  	$('input[name=\'special\']').bind('change', function(){
  		if($(this).is(':checked')){
     		$('#special').fadeIn();
		} else {
   			$('#special').fadeOut();
		}
	});	
});
//--></script>
<script type="text/javascript"><!--
$('input[name=\'menu_option\']').autocomplete({
	delay: 0,
	source: function(request, response) {
		$.ajax({
			url: '<?php echo site_url("admin/menu_options/autocomplete"); ?>?option_name=' +  encodeURIComponent(request.term),
			dataType: 'json',
			success: function(json) {		
				response($.map(json, function(item) {
					return {
						label: item.option_name,
						value: item.option_id,
						price: item.option_price
					}
				}));
			}
		});
	},
	select: function(event, ui) {
		$('#menu-option' + ui.item.value).remove();
		$('#menu-option table').append('<tr id="#menu-option' + ui.item.value + '"><td class="name">' + ui.item.label + '</td><td>' + ui.item.price + '</td><td class="img">' + '<img src="<?php echo base_url('assets/img/delete.png'); ?>" onclick="$(this).parent().parent().remove();" />' + '<input type="hidden" name="menu_options[]" value="' + ui.item.value + '" /></td></tr>');

		return false;
	},
	focus: function(event, ui) {
      	return false;
   	}
});

$('#menu-option tr img').click(function() {
	$(this).parent().parent().remove();
}); 
//--></script>

<script type="text/javascript"><!--
function filter_list() {
	url = '<?php echo current_url(); ?>';
	
	var filter_page = '<?php echo (isset($_GET["page"])) ? $_GET["page"] : FALSE; ?>';
	var filter_category = $('select[name=\'filter_category\']').val();
	
	if (filter_page != '') {
		url += '?page=' + encodeURIComponent(filter_page);
	}
	
	if (filter_category != '') {
		url += '&filter_category=' + encodeURIComponent(filter_category);
	}
	
	location = url;
}
//--></script>