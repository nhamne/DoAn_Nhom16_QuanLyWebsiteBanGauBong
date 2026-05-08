<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

</div><!-- .col-full -->
</div><!-- #content -->

<?php do_action('storefront_before_footer'); ?>


	<div>

		<?php
		if (function_exists('storefront_footer_widgets')) {
			storefront_footer_widgets();
		}
		?>

		<!-- Đã đưa style màu nền và viền ra thẻ footer tĩnh -->
		<footer
			style="background-color: #9fccff; width: 100%; padding: 30px 0; border-top: 2px dashed #456dff; margin-top: 40px; float: left;">
			<div style="text-align: center; font-weight: bold; max-width: 1200px; margin: 0 auto;">
				<h3 style="color: #4685DA; font-weight: bold;">TEDDY SHOP - THẾ GIỚI GẤU BÔNG</h3>
				<p>Địa chỉ: Trường Đại học Điện Lực, 235 Hoàng Quốc Việt, Hà Nội</p>
				<p>Điện thoại: 0989 211 064 | Email: cskh@teddyshop.com</p>
				<p>Bản quyền © 2026 - Teddy Shop</p>
			</div>
		</footer>

<?php do_action('storefront_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>