<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package storefront
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<div style="background-color: #ffb6c1; border-radius: 5px; padding: 10px; margin-bottom: 20px; text-align: center;">
		<h3 style="color: white; margin: 0;">🎀 Khám Phá Teddy Shop</h3>
	</div>
	<?php dynamic_sidebar('sidebar-1'); ?>

</div><!-- #secondary -->