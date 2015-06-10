<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php 

$product_regular_price = ($product_meta['_regular_price'][0] != '' ? $product_meta['_regular_price'][0] : false);
$product_sale_price = ($product_meta['_sale_price'][0] != '' ? $product_meta['_sale_price'][0] : false);
?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
 	<div class="row product__details">
		 <div class="landmark columns small-12">
 			<?php woocommerce_breadcrumb(); ?>
 		</div>
			<div class="columns small-12 landmark--half">
				<span class="product-single__price ">
	 				<?php if($product_sale_price): ?>
	 					Was: £<?php echo ($product_regular_price); ?>, Now: £<?php echo $product_sale_price; ?>
	 				<?php elseif($product_regular_price): ?>
	 					£<?php echo ($product_regular_price); ?>
	 				<?php endif; ?>
 				</span>
 			</div>
 		<div class="columns medium-7 ">

		 	<?php echo wpautop(apply_filters('the_content', $post->post_content)); ?>


 		</div>
 		 <div class="columns medium-5">
 			<?php if(wp_get_attachment_image_src(get_post_thumbnail_id($post->ID))): ?>
 				<?php include(locate_template('parts/imagery/product-single.php')); ?>
 			<?php endif; ?>
 		</div>
 	</div>
	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
