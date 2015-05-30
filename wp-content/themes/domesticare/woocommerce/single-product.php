<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header( 'shop' ); ?>

<?php global $product; ?>

<?php $product_meta = get_post_meta($post->ID); ?>

<div class="pad-wrapper">
	<div class="row row--reduced">
		<div class="small-12 large-9 columns negative-offest-left landmark" role="main">
			<div>
				<?php wc_print_notices(); ?>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php include(locate_template('woocommerce/content-single-product.php')); ?>

			<?php endwhile; // end of the loop. ?>
		</div>

		<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
		?>

	</div>
</div>
<?php get_footer( 'shop' ); ?>